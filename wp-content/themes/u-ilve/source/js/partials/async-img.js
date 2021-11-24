const { checkDisabled } = require("./check-disabled");
const { checkThatObjectIsInScrollArea } = require("./distance-checking");
const { OptimizedScroll } = require("./optimized-scroll-event");
const { removeFromArray } = require("./remove-from-array");

const maxParallelHighLoads = Number(document.querySelector('[meta="max-parallel-high-loads"]')?.content) || 400_000;

const imagesElements = document.querySelectorAll('[data-async-image]');
const loadingLazySupport = "loading" in HTMLImageElement.prototype;

const imagesElementsGroups = document.querySelectorAll('[data-async-image-group]');
const asyncBackgroundOutput = () => document.getElementsByClassName('js-async-background-group')[0];

for (let scrollBackgroundGroupIteration = 0; scrollBackgroundGroupIteration < imagesElementsGroups.length; scrollBackgroundGroupIteration++) {
  const imageElement = imagesElementsGroups[scrollBackgroundGroupIteration];
  const linksProperties = JSON.parse(imageElement.getAttribute('data-async-image-group'));
  const asyncClassName = `async-background-${scrollBackgroundGroupIteration}`;
  imageElement.classList.add(asyncClassName);
  window.addEventListener('load', () => {
    waitImageInScrollArea(imageElement, linksProperties[0], () => {
      for (const minResolution in linksProperties) {
        if (Object.hasOwnProperty.call(linksProperties, minResolution)) {
          const linkProperties = linksProperties[minResolution];
          setAfterLoad(linkProperties, () => requestAnimationFrame(() => {
            asyncBackgroundOutput().innerHTML = asyncBackgroundOutput().innerHTML + `
              @media (min-width: ${minResolution}px) {
                .${asyncClassName} {
                  background-image: url(${linkProperties.src});
                }
              }
              `;
          }));
        }
      }
    });
  });
}

let disabledImagesLoadList = [];
let currentImagesLoadListLastAccessTime = Date.now();
let currentImagesLoadList = new Proxy([], {
  set: function(target, property, value, receiver) {      
    target[property] = value;
    currentImagesLoadListLastAccessTime = Date.now();
    return true;
  },
  deleteProperty: function(target, property) {
    currentImagesLoadListLastAccessTime = Date.now();
    return true;
  },
});

const highLoadsPlan = [];
const currentHighLoads = [];

initAllNotManualAsyncImg();
window.addEventListener('load', function() {
  setTimeout(() => setInterval(() => requestAnimationFrame(startHighLoad), 500), 1000);
});
function initAllNotManualAsyncImg() {
  for (let elementIteration = 0; elementIteration < imagesElements.length; elementIteration++) {
    const imageElement = imagesElements[elementIteration];
    initAsyncImg(imageElement, false);
  }
}

function initAsyncImg(imageElement, manual = true) {
  if (!imageElement.hasAttribute('data-async-image')) return 'not for async';
  
  const linkProperties = JSON.parse(imageElement.getAttribute('data-async-image'));
  
  if (linkProperties.manual && !manual) return;
  
  let setSrc;
  if (linkProperties.isBackground) {
    setSrc = () => {
      setSrcForBackground(linkProperties, imageElement);
    }
  } else {
    setSrc = () => {
      setSrcForImg(linkProperties, imageElement);
    }
  }

  if (checkDisabled(imageElement)) {
    disabledImagesLoadList.push({
      linkProperties,
      imageElement,
      callback: () => setAfterLoad(linkProperties, () => (linkProperties.isBackground ? backgroundSetter(linkProperties, imageElement) : tagImgSetter(linkProperties, imageElement)))
    });
  }

  if (manual) {
    setSrc();
  } else {
    window.addEventListener('load', setSrc);
  }
}
function waitImageInScrollArea(imageElement, linkProperties, callback) {
  setTimeout(() => {
    if (!linkProperties.scroll) return actionsWhenInScrollArea(imageElement, linkProperties, callback);

    if (checkThatObjectIsInScrollArea(imageElement, 800)) {
      actionsWhenInScrollArea(imageElement, linkProperties, callback);
    } else {
      let finished = false;
      const handler = window.addEventListener(OptimizedScroll.defaultEventName, function() {
        if (!finished && checkThatObjectIsInScrollArea(imageElement, 800)) {
          finished = true;
          actionsWhenInScrollArea(imageElement, linkProperties, callback);
          
          setTimeout(() => requestAnimationFrame(() => window.removeEventListener(OptimizedScroll.defaultEventName, handler)), 0);
        }
      });
    }
  }, 100);
}
function actionsWhenInScrollArea(imageElement, linkProperties, callback) {
  if (checkDisabled(imageElement)) {
    const interval = setInterval(() => {
      if (!checkDisabled(imageElement)) {
        clearInterval(interval);
        imageElement.removeAttribute('loading');

        if (linkProperties.isHigh) {
          addToHighLoadPlan({
            linkProperties,
            imageElement,
            callback
          });
        } else {
          callback();
        }
      }
    }, 500);
  } else {
    if (linkProperties.isHigh) {
      addToHighLoadPlan({
        linkProperties,
        imageElement,
        callback
      });
    } else {
      callback();
    }
  }
}

function setSrcForBackground(linkProperties, imageElement) {
  waitImageInScrollArea(imageElement, linkProperties, () => setAfterLoad(linkProperties, setNow));

  function setNow() {
    requestAnimationFrame(() => {
      backgroundSetter(linkProperties, imageElement);
      setLoadedClass(imageElement);
    });
  }
}

function backgroundSetter(linkProperties, imageElement) {
  imageElement.style.backgroundImage = `url(${linkProperties.src})`;
}

function setSrcForImg(linkProperties, imageElement) {
  if (loadingLazySupport && !linkProperties.isHigh && !checkDisabled(imageElement)) {
    setNow();
  } else {
    waitImageInScrollArea(imageElement, linkProperties, () => setAfterLoad(linkProperties, setNow));
  }
  
  function setNow() {
    requestAnimationFrame(() => {
      tagImgSetter(linkProperties, imageElement);
      setLoadedClass(imageElement);
    });
  }
}

function tagImgSetter(linkProperties, imageElement) {
  imageElement.src = linkProperties.src;
}

function setLoadedClass(imageElement) {
  imageElement.classList.add('image-loaded');
}

function setAfterLoad(linkProperties, callback, errorCallback = false) {
  currentImagesLoadList.push(linkProperties);

  const newImage = new Image();
  newImage.src = linkProperties.src;

  newImage.onload = () => {
    callback();
    disabledImagesLoadList = disabledImagesLoadList.filter(iterable => iterable.linkProperties.src !== linkProperties.src);
    removeFromArray(currentImagesLoadList, linkProperties);
  };
  ['abort', 'error', 'suspend'].map(eventName => {
    newImage.addEventListener(eventName, () => {
      if (errorCallback) {
        errorCallback();
      }
      disabledImagesLoadList = disabledImagesLoadList.filter(iterable => iterable.linkProperties.src !== linkProperties.src);
      removeFromArray(currentImagesLoadList, linkProperties);
    });
  });
}

function startHighLoad() {
  if (currentHighLoads.length >= maxParallelHighLoads || highLoadsPlan.length === 0) return;
  
  const img = highLoadsPlan[0];
  currentHighLoads.push(img);
  highLoadsPlan.splice(0, 1);

  requestAnimationFrame(() => setAfterLoad(img.linkProperties, () => {
    img.callback();
    removeFromArray(currentHighLoads, img);

    setTimeout(() => {
      startHighLoad();
    }, 0);
  }, () => {
    removeFromArray(currentHighLoads, img);

    setTimeout(() => {
      startHighLoad();
    }, 0);
  }));
}

window.addEventListener('load', function() {
  const disabledCheckInterval = setInterval(() => {
    if (currentImagesLoadList.length === 0 && currentImagesLoadListLastAccessTime > 2000 && window.scrollY > 400) {
      clearInterval(disabledCheckInterval);

      for (let i = 0; i < disabledImagesLoadList.length; i++) {
        const image = disabledImagesLoadList[i];
        addToHighLoadPlan({
          linkProperties: image.linkProperties,
          imageElement: image.imageElement,
          callback: image.callback
        });
      }
    }
  }, 1000);
});

function addToHighLoadPlan(highLoadFormat) {
  if (!highLoadsPlan.find(tested => tested.imageElement === highLoadFormat.imageElement) && highLoadFormat.linkProperties.src !== highLoadFormat.imageElement.src) {
    highLoadsPlan.push(highLoadFormat);
  }
}

module.exports = {
  initAsyncImg
}