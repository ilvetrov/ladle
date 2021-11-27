const galleries = document.getElementsByClassName('js-adaptive-gallery');

for (let galleryIteration = 0; galleryIteration < galleries.length; galleryIteration++) {
  const gallery = galleries[galleryIteration];
  const wrap = gallery.getElementsByClassName('js-adaptive-gallery-wrap')[0];
  const items = gallery.getElementsByClassName('js-adaptive-gallery-item');
  const prevButton = gallery.getElementsByClassName('js-adaptive-gallery-prev')[0];
  const nextButton = gallery.getElementsByClassName('js-adaptive-gallery-next')[0];

  function updateValues() {
    if (getCurrentPosition(gallery) === 0) {
      prevButton.classList.add('hidden');
    } else {
      prevButton.classList.remove('hidden');
    }
    if (getCurrentPosition(gallery) >= items.length - 1) {
      nextButton.classList.add('hidden');
    } else {
      nextButton.classList.remove('hidden');
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
    if (getCurrentPosition(gallery) < items.length - 1) {
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