var x, i, j, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName('custom-select');
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName('select')[0];
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement('DIV');
  a.setAttribute('class', 'select-selected');
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement('DIV');
  b.setAttribute('class', 'select-items select-hide');
  for (j = 1; j < selElmnt.length; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement('DIV');
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener('click', function(e) {
      /* When an item is clicked, update the original select box,
        and the selected item: */
      var y, i, k, s, h;
      s = this.parentNode.parentNode.getElementsByTagName('select')[0];
      h = this.parentNode.previousSibling;
      for (i = 0; i < s.length; i++) {
        if (s.options[i].innerHTML == this.innerHTML) {
          s.selectedIndex = i;
          h.innerHTML = this.innerHTML;
          y = this.parentNode.getElementsByClassName('same-as-selected');
          for (k = 0; k < y.length; k++) {
            y[k].removeAttribute('class');
          }
          this.setAttribute('class', 'same-as-selected');
          break;
        }
      }
      h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener('click', function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle('select-hide');
    this.classList.toggle('select-arrow-active');
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x,
    y,
    i,
    arrNo = [];
  x = document.getElementsByClassName('select-items');
  y = document.getElementsByClassName('select-selected');
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i);
    } else {
      y[i].classList.remove('select-arrow-active');
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add('select-hide');
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener('click', closeAllSelect);

// RANGE SLIDER

(function(win, dom) {
  'use strict';

  // Check for .rangeControl class
  var rangeControlList = dom.getElementsByClassName('custom-rangeInput');

  // Inits components
  var init = function() {
    // Loop all controls
    for (var i = 0; i < rangeControlList.length; i++) {
      // Apply inital
      updateController(rangeControlList[i]);
      // Update when changed
      rangeControlList[i].addEventListener('input', function() {
        updateController(this);
      });
      // Update when changed ( for older browsers )
      rangeControlList[i].addEventListener('change', function() {
        updateController(this);
      });
    }
  };

  // Updates components
  var update = function() {
    for (var i = 0; i < rangeControlList.length; i++) {
      updateController(rangeControlList[i]);
    }
  };

  // Update controller
  var updateController = function(obj) {
    // Thumb Position
    var thumbPos = getThumbPercentage(obj);
    var thumPosPX = getThumbPosition(obj);
    if (obj.getAttribute('data-tooltip') != 'false') {
      updateTooltip(obj.nextElementSibling, obj.value, thumPosPX, thumbPos);
    } else {
      obj.nextElementSibling.style.display = 'none';
    }
    updateProgress(obj, '#5C5F6D', '#EDCB9B', thumbPos);
  };

  // Retun range slider pixel position according to offset
  // obj : target object
  var getThumbPosition = function(obj) {
    return Math.round((obj.offsetWidth / 500000) * obj.value); // Pixel
  };

  // Retun range slider percentage to thumb position
  // obj : target object
  var getThumbPercentage = function(obj) {
    return Math.round((100 * obj.value) / obj.getAttribute('max')); // Percentage
  };

  // Updated range slider tooltip
  // obj : target object
  // text : tooltip label
  // position : absolute position
  // percentage : percentage of current value
  var updateTooltip = function(obj, text, position, percentage) {
    obj.innerHTML = text; // Tooltip text
    obj.style.left = position + 'px'; // Tooltip position

    // Tooltip Position
    var tooltipStartPos = 26;
    var tooltipPosFix = percentage / 1.8;
    if (percentage > 50) {
      tooltipPosFix = percentage / 2.2;
    }
    obj.style.transform =
      'translate(-' + (tooltipStartPos + tooltipPosFix) + '%, 0)';
  };

  // Updated background progress bar of range slider
  // obj : target object
  // progressBgColor : background color
  // progressFillColor : fill color
  // percentage : percentage of current value
  var updateProgress = function(
    obj,
    progressBgColor,
    progressFillColor,
    percentage
  ) {
    var rangeBg =
      'linear-gradient(to right,  ' +
      progressFillColor +
      ' 0%, ' +
      progressFillColor +
      ' ' +
      percentage +
      '%, ' +
      progressBgColor +
      ' ' +
      percentage +
      '%, ' +
      progressBgColor +
      ' 100%)';
    var cssRule =
      '#' +
      obj.id +
      '::-webkit-slider-runnable-track { background : ' +
      rangeBg +
      ' } ';
    cssRule +=
      '#' + obj.id + '::-moz-range-track { background : ' + rangeBg + ' } ';
    cssRule += '#' + obj.id + '::-ms-track { background : ' + rangeBg + ' } ';
    var applyStyle = function(styleName, cssText) {
      var styleElement = dom.getElementById(styleName);
      if (styleElement)
        dom.getElementsByTagName('head')[0].removeChild(styleElement);

      styleElement = dom.createElement('style');
      styleElement.type = 'text/css';
      styleElement.id = styleName;
      styleElement.innerHTML = cssText;
      dom.getElementsByTagName('head')[0].appendChild(styleElement);
    };
    applyStyle('range_' + obj.id, cssRule);
  };

  // Refresh on resize
  var fireOnceOnResize;
  win.addEventListener('resize', function() {
    fireOnceOnResize = setTimeout(update, 100);
  });

  // Init Component
  init();
})(window, document);

// ANIMATION

gsap.fromTo(
  '.nav',
  { y: -200, opacity: 0 },
  { duration: 1, delay: 0.8, y: 0, opacity: 1 }
);
gsap.fromTo(
  '.hero',
  { y: -200, opacity: 0 },
  { duration: 0.5, delay: 0.5, y: 0, opacity: 1, ease: 'power4. out' }
);
gsap.fromTo(
  '.hero__right-image',
  { x: -600, opacity: 0 },
  { duration: 0.8, delay: 1, x: 0, opacity: 1, ease: 'power4. out' }
);

// gallery animation

gsap.fromTo(
  '.g-img',
  { x: -600, opacity: 0, scale: 1.5 },
  { duration: 0.8, delay: 1, scale: 1, x: 0, opacity: 1, ease: 'power4. out' }
);

console.log('lol');

// Menu

const menu = document.getElementById('hamburger');
const navwrapper = document.querySelector('.nav__wrapper');
const close = document.querySelector('.close__nav');

const tl = gsap.timeline({ paused: true });

tl.fromTo(
  '.nav__wrapper',
  { css: { display: 'none', opacity: 0 }, duration: 0.5, stagger: 1 },
  { css: { display: 'block', opacity: 1 }, duration: 0.5, stagger: 1 }
)
  .fromTo('.close__nav', { opacity: 0 }, { opacity: 1 }, '<')
  .fromTo(
    '.nav__list-mobile > li',
    { opacity: 0 },
    { opacity: 1, stagger: { amount: 0.4 } },
    '<'
  );

menu.addEventListener('click', () => {
  tl.play();
});

close.addEventListener('click', () => {
  tl.reverse();
});
