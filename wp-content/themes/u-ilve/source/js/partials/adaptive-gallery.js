const galleries = document.getElementsByClassName('js-adaptive-gallery');

for (let galleryIteration = 0; galleryIteration < galleries.length; galleryIteration++) {
  const gallery = galleries[galleryIteration];
  const wrap = gallery.getElementsByClassName('js-adaptive-gallery-wrap')[0];
  const items = gallery.getElementsByClassName('js-adaptive-gallery-item');
  const prevButton = gallery.getElementsByClassName('js-adaptive-gallery-prev')[0];
  const nextButton = gallery.getElementsByClassName('js-adaptive-gallery-next')[0];

  function updateValues() {
    if (wrap.offsetWidth <= gallery.offsetWidth + 20) {
      [prevButton, nextButton].forEach(button => button.classList.add('hidden'));
      return;
    } else {
      [prevButton, nextButton].forEach(button => button.classList.remove('hidden'));
    }
    const galleryWidth = gallery.getBoundingClientRect().width;

    if (getCurrentPosition(gallery) === 0) {
      prevButton.classList.add('inactive');
    } else {
      prevButton.classList.remove('inactive');
    }
    if (
      getCurrentPosition(gallery) >= items.length - 1
      || getCapacityPosition(getCurrentPosition(gallery), galleryWidth, items, getCurrentPosition(gallery)) === (items.length - 1)
    ) {
      nextButton.classList.add('inactive');
    } else {
      nextButton.classList.remove('inactive');
    }
    wrap.style.transform = `translateX(-${
      getPosition(getCurrentItem(gallery, items), wrap)
    }px)`;
    for (let i = 0; i < items.length; i++) {
      const item = items[i];
      if (i === getCurrentPosition(gallery)) {
        item.children[0].classList.add('current');
      } else {
        item.children[0].classList.remove('current');
      }
    }
  }
  updateValues();
  
  nextButton.addEventListener('click', function() {
    if (
      getCurrentPosition(gallery) < items.length - 1
    ) {
      gallery.setAttribute('data-current-item', Number(gallery.getAttribute('data-current-item')) + 1);
    }
    updateValues();
  });
  prevButton.addEventListener('click', function() {
    if (getCurrentPosition(gallery) > 0) {
      gallery.setAttribute('data-current-item', Number(gallery.getAttribute('data-current-item')) - 1);
    }
    updateValues();
  });

  window.addEventListener('resize-width', updateValues);
}

function getCapacityPosition(currentPosition, galleryWidth, items, testPosition) {
  if (testPosition > items.length - 1) return testPosition - 1;
  const testWidth = (
    items[testPosition].getBoundingClientRect().width
    + (
      currentPosition === testPosition || currentPosition === 0
        ? -(
          currentPosition === 0
            ? getElementsOffset(items[currentPosition], items[currentPosition + 1])
            : getElementsOffset(items[currentPosition - 1], items[currentPosition])
        )
        : getElementsOffset(items[currentPosition - 1], items[currentPosition])
    )
  );
  if (galleryWidth - testWidth == 0) {
    return testPosition;
  } else if (galleryWidth - testWidth < 0) {
    return testPosition - 1;
  } else {
    return getCapacityPosition(currentPosition, galleryWidth - testWidth, items, testPosition + 1)
  }
}

function getElementsOffset(item1, item2) {
  const item1Pos = item1.getBoundingClientRect();
  const item2Pos = item2.getBoundingClientRect();
  return item2Pos.x - (item1Pos.x + item1Pos.width);
}

function getCurrentPosition(gallery) {
  return Number(gallery.getAttribute('data-current-item'));
}
function getCurrentItem(gallery, items) {
  return items[getCurrentPosition(gallery)];
}

function getPosition(item, wrap) {
  return item.getBoundingClientRect().x - wrap.getBoundingClientRect().x;
}

const fullWidthGalleries = document.getElementsByClassName('full-width-gallery');

for (let i = 0; i < fullWidthGalleries.length; i++) {
  const fullWidthGallery = fullWidthGalleries[i];
  
  function set() {
    if (window.innerWidth > 1330) return;

    fullWidthGallery.style.marginLeft = ``;
    fullWidthGallery.style.marginRight = ``;

    fullWidthGallery.style.paddingLeft = ``;
    fullWidthGallery.style.paddingRight = ``;

    const offsetLeft = fullWidthGallery.getBoundingClientRect().x;
    const offsetRight = fullWidthGallery.getBoundingClientRect().x;
    fullWidthGallery.style.marginLeft = `-${offsetLeft}px`;
    fullWidthGallery.style.marginRight = `-${offsetRight}px`;

    fullWidthGallery.style.paddingLeft = `${offsetLeft}px`;
    fullWidthGallery.style.paddingRight = `${offsetRight}px`;
  }

  set();
  window.addEventListener('resize-width', function() {
    set();
  });
}