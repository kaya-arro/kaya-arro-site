for (let gallery of document.getElementsByClassName('theater-imgs')) {
  lightGalleryMain(gallery);
}

for (let gallery of document.getElementsByClassName('gallery-container-1')) {
    lightGalleryMain(gallery);
}

for (let gallery of document.getElementsByClassName('gallery-container-2')) {
  lightGallery(gallery, {
    selector: '.gallery-item-2',
    hideScrollbar: true,
    download: false,
    counter: false,
    plugins: [
      // lgMediumZoom,
    ],
    mobileSettings: {
      controls: false,
      showCloseIcon: true,
      download: false,
      hideScrollbar: true,
      counter: false,
    }
  });
}

function lightGalleryMain (x) {
  lightGallery(x, {
    selector: '.gallery-item',
    speed: 300,
    hideScrollbar: true,
    exThumbImage: 'data-external-thumb-image',
    zoomFromOrigin: false,
    plugins: [
      lgThumbnail,
      lgFullscreen,
      lgAutoplay,
      // lgZoom,
      // lgMediumZoom,
    ],
    mobileSettings: {
      controls: false,
      showCloseIcon: true,
      download: true,
      hideScrollbar: true,
    }
  });
}
