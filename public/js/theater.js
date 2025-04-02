// Consider: lazy rollIn and rollOut that check first. Not to be used with toggleDisp but to be used with toggleAll and handleHash.

// Parameters

var speedTheater = 500;

// Utility variables

var theaters = document.getElementsByClassName('theater');
var theatersImgs = [];
var dispAll = false;
var hashTheater;

// The actual instructions

handleHash();
// scrollToTheater();

window.addEventListener('hashchange', () => {
  handleHash();
  scrollToTheater();
});

window.addEventListener('load', () => {
  scrollToTheater();
});

document.getElementById('navbar').addEventListener('resize', () => {
  for (let x of theaters) {
    if (contDisp(x) === 'block') {
      setTimeout(() => {rollOut(x,0)}, 500);
    }
  }
});

// The following functions are used handling which theaters are displayed.

function handleHash() {
  let hash = window.location.hash.slice(1);
  if (hash) {
    hashTheater = document.getElementById(hash);
    rollOut(hashTheater,0);
  }
}

function toggleAll() {
  dispAll = !dispAll;
  if (dispAll) {
    for (let x of theaters) {
      if (contDisp(x) === 'none') rollOut(x,speedTheater);
    }
  } else {
    history.replaceState(null, null, '#');
    for (let x of theaters) {
      if (contDisp(x) === 'block') rollIn(x,speedTheater);
    }
  }
}

// A function to toggle whether an element is displayed. This is run when you click on the title of a theater (the call is in the php).

function toggleDisplay(x) {
  if (contDisp(x) === 'none') {
    rollOut(x,speedTheater);
  } else {
    rollIn(x,speedTheater);
    if (x.id === hashTheater.id) history.replaceState(null, null, '#');
  }
}

// This function is used to scroll to the selected theater.

function scrollToTheater() {
  if (!(window.location.hash.replace('#', '') == '')) {
    hashTheater.scrollIntoView({behavior: 'smooth'});
  }
}

function contDisp(x) {
  return window.getComputedStyle(contElt(x), null).display;
}
