// Navbar

// Parameters

var speedDrop = 250;
var startOpac = 0;

// Utility variables

var navbar = document.getElementById('navbar');
var banner = document.getElementById('banner');
var filler = document.getElementById('filler');
var dropdowns = document.getElementsByClassName('dropdown');

// Commands

styleNav();
window.onscroll = function() {styleNav()};

for (let dropdown of dropdowns) {
  dropdown.addEventListener('mouseover', function() {
    rollOut(dropdown,speedDrop);
    contElt(dropdown).style.width = measElt(dropdown).offsetWidth + 'px';
  })
  dropdown.addEventListener('mouseleave', function() {
    rollIn(dropdown,0);
  })
}

// Functions

function styleNav() {
  var yCoeff = window.scrollY/(banner.offsetHeight - navbar.offsetHeight);
  var yUped = Math.max(startOpac,yCoeff);
  navbar.style.backgroundColor = 'rgba(32,32,32,' + yUped + ')';
  filler.style.color = 'rgba(240,240,240,' + yCoeff + ')';
}

function rollOut(x,s) {
  var cont = contElt(x);
  var meas = measElt(x);
  cont.style.display = 'block';
  cont.style.transition = 'height linear ' + s + 'ms';
  cont.style.height = 0;
  cont.style.height = meas.offsetHeight + 'px';
}

function rollIn(x,s) {
  var cont = contElt(x);
  cont.style.transitionDuration = s + 'ms';
  cont.style.height = 0;
  setTimeout(() => {cont.style.display = 'none'}, s);
}

function contElt(x) {
  return x.getElementsByClassName('cont')[0];
}

function measElt(x) {
  return x.getElementsByClassName('meas')[0];
}

// Curtain

var curtain = document.getElementById('curtain');
var curtainLinks = curtain.querySelectorAll('#curtain-content a');
var curtainState = false;
var body = document.body;

for (let curtainLink of curtainLinks) {
  curtainLink.addEventListener('click', () => {
    closeNavNow();
  })
}

// document.addEventListener('keydown', (event) => {
//   if (event.key === 'Escape') closeNav();
// })

function openNav() {
  curtainState = true;
  curtain.style.transition = '0.15s';
  curtain.style.width = '100dvw';
  body.style.overflow = 'hidden';
}

function closeNavNow() {
  curtain.style.transition = '0s';
  closeNav();
}

function closeNav() {
  curtainState = false;
  body.style.overflow = 'scroll';
  curtain.style.width = '0';
}

// Galleries

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
    download: true,
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
