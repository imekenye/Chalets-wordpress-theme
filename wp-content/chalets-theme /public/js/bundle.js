/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/mini-css-extract-plugin/dist/loader.js!./node_modules/css-loader/dist/cjs.js!./node_modules/sass-loader/dist/cjs.js!./src/app.scss":
/*!*********************************************************************************************************************************************************!*\
  !*** ./node_modules/mini-css-extract-plugin/dist/loader.js!./node_modules/css-loader/dist/cjs.js!./node_modules/sass-loader/dist/cjs.js!./src/app.scss ***!
  \*********************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js":
/*!****************************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js ***!
  \****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var isOldIE = function isOldIE() {
  var memo;
  return function memorize() {
    if (typeof memo === 'undefined') {
      // Test for IE <= 9 as proposed by Browserhacks
      // @see http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
      // Tests for existence of standard globals is to allow style-loader
      // to operate correctly into non-standard environments
      // @see https://github.com/webpack-contrib/style-loader/issues/177
      memo = Boolean(window && document && document.all && !window.atob);
    }

    return memo;
  };
}();

var getTarget = function getTarget() {
  var memo = {};
  return function memorize(target) {
    if (typeof memo[target] === 'undefined') {
      var styleTarget = document.querySelector(target); // Special case to return head of iframe instead of iframe itself

      if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {
        try {
          // This will throw an exception if access to iframe is blocked
          // due to cross-origin restrictions
          styleTarget = styleTarget.contentDocument.head;
        } catch (e) {
          // istanbul ignore next
          styleTarget = null;
        }
      }

      memo[target] = styleTarget;
    }

    return memo[target];
  };
}();

var stylesInDom = [];

function getIndexByIdentifier(identifier) {
  var result = -1;

  for (var i = 0; i < stylesInDom.length; i++) {
    if (stylesInDom[i].identifier === identifier) {
      result = i;
      break;
    }
  }

  return result;
}

function modulesToDom(list, options) {
  var idCountMap = {};
  var identifiers = [];

  for (var i = 0; i < list.length; i++) {
    var item = list[i];
    var id = options.base ? item[0] + options.base : item[0];
    var count = idCountMap[id] || 0;
    var identifier = "".concat(id, " ").concat(count);
    idCountMap[id] = count + 1;
    var index = getIndexByIdentifier(identifier);
    var obj = {
      css: item[1],
      media: item[2],
      sourceMap: item[3]
    };

    if (index !== -1) {
      stylesInDom[index].references++;
      stylesInDom[index].updater(obj);
    } else {
      stylesInDom.push({
        identifier: identifier,
        updater: addStyle(obj, options),
        references: 1
      });
    }

    identifiers.push(identifier);
  }

  return identifiers;
}

function insertStyleElement(options) {
  var style = document.createElement('style');
  var attributes = options.attributes || {};

  if (typeof attributes.nonce === 'undefined') {
    var nonce =  true ? __webpack_require__.nc : undefined;

    if (nonce) {
      attributes.nonce = nonce;
    }
  }

  Object.keys(attributes).forEach(function (key) {
    style.setAttribute(key, attributes[key]);
  });

  if (typeof options.insert === 'function') {
    options.insert(style);
  } else {
    var target = getTarget(options.insert || 'head');

    if (!target) {
      throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
    }

    target.appendChild(style);
  }

  return style;
}

function removeStyleElement(style) {
  // istanbul ignore if
  if (style.parentNode === null) {
    return false;
  }

  style.parentNode.removeChild(style);
}
/* istanbul ignore next  */


var replaceText = function replaceText() {
  var textStore = [];
  return function replace(index, replacement) {
    textStore[index] = replacement;
    return textStore.filter(Boolean).join('\n');
  };
}();

function applyToSingletonTag(style, index, remove, obj) {
  var css = remove ? '' : obj.media ? "@media ".concat(obj.media, " {").concat(obj.css, "}") : obj.css; // For old IE

  /* istanbul ignore if  */

  if (style.styleSheet) {
    style.styleSheet.cssText = replaceText(index, css);
  } else {
    var cssNode = document.createTextNode(css);
    var childNodes = style.childNodes;

    if (childNodes[index]) {
      style.removeChild(childNodes[index]);
    }

    if (childNodes.length) {
      style.insertBefore(cssNode, childNodes[index]);
    } else {
      style.appendChild(cssNode);
    }
  }
}

function applyToTag(style, options, obj) {
  var css = obj.css;
  var media = obj.media;
  var sourceMap = obj.sourceMap;

  if (media) {
    style.setAttribute('media', media);
  } else {
    style.removeAttribute('media');
  }

  if (sourceMap && btoa) {
    css += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))), " */");
  } // For old IE

  /* istanbul ignore if  */


  if (style.styleSheet) {
    style.styleSheet.cssText = css;
  } else {
    while (style.firstChild) {
      style.removeChild(style.firstChild);
    }

    style.appendChild(document.createTextNode(css));
  }
}

var singleton = null;
var singletonCounter = 0;

function addStyle(obj, options) {
  var style;
  var update;
  var remove;

  if (options.singleton) {
    var styleIndex = singletonCounter++;
    style = singleton || (singleton = insertStyleElement(options));
    update = applyToSingletonTag.bind(null, style, styleIndex, false);
    remove = applyToSingletonTag.bind(null, style, styleIndex, true);
  } else {
    style = insertStyleElement(options);
    update = applyToTag.bind(null, style, options);

    remove = function remove() {
      removeStyleElement(style);
    };
  }

  update(obj);
  return function updateStyle(newObj) {
    if (newObj) {
      if (newObj.css === obj.css && newObj.media === obj.media && newObj.sourceMap === obj.sourceMap) {
        return;
      }

      update(obj = newObj);
    } else {
      remove();
    }
  };
}

module.exports = function (list, options) {
  options = options || {}; // Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
  // tags it will allow on a page

  if (!options.singleton && typeof options.singleton !== 'boolean') {
    options.singleton = isOldIE();
  }

  list = list || [];
  var lastIdentifiers = modulesToDom(list, options);
  return function update(newList) {
    newList = newList || [];

    if (Object.prototype.toString.call(newList) !== '[object Array]') {
      return;
    }

    for (var i = 0; i < lastIdentifiers.length; i++) {
      var identifier = lastIdentifiers[i];
      var index = getIndexByIdentifier(identifier);
      stylesInDom[index].references--;
    }

    var newLastIdentifiers = modulesToDom(newList, options);

    for (var _i = 0; _i < lastIdentifiers.length; _i++) {
      var _identifier = lastIdentifiers[_i];

      var _index = getIndexByIdentifier(_identifier);

      if (stylesInDom[_index].references === 0) {
        stylesInDom[_index].updater();

        stylesInDom.splice(_index, 1);
      }
    }

    lastIdentifiers = newLastIdentifiers;
  };
};

/***/ }),

/***/ "./src/app.scss":
/*!**********************!*\
  !*** ./src/app.scss ***!
  \**********************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var api = __webpack_require__(/*! ../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
            var content = __webpack_require__(/*! !../node_modules/mini-css-extract-plugin/dist/loader.js!../node_modules/css-loader/dist/cjs.js!../node_modules/sass-loader/dist/cjs.js!./app.scss */ "./node_modules/mini-css-extract-plugin/dist/loader.js!./node_modules/css-loader/dist/cjs.js!./node_modules/sass-loader/dist/cjs.js!./src/app.scss");

            content = content.__esModule ? content.default : content;

            if (typeof content === 'string') {
              content = [[module.i, content, '']];
            }

var options = {};

options.insert = "head";
options.singleton = false;

var update = api(content, options);



module.exports = content.locals || {};

/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _js_main_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./js/main.js */ "./src/js/main.js");
/* harmony import */ var _js_main_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_js_main_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _js_Search_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/Search.js */ "./src/js/Search.js");
/* harmony import */ var _js_Search_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_Search_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _app_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./app.scss */ "./src/app.scss");
/* harmony import */ var _app_scss__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_app_scss__WEBPACK_IMPORTED_MODULE_2__);




/***/ }),

/***/ "./src/js/Search.js":
/*!**************************!*\
  !*** ./src/js/Search.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: /Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/src/js/Search.js: Support for the experimental syntax 'classProperties' isn't currently enabled (45:14):\n\n\u001b[0m \u001b[90m 43 | \u001b[39m  }\u001b[0m\n\u001b[0m \u001b[90m 44 | \u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 45 | \u001b[39m  getResults \u001b[33m=\u001b[39m () \u001b[33m=>\u001b[39m {\u001b[0m\n\u001b[0m \u001b[90m    | \u001b[39m             \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 46 | \u001b[39m    jQuery\u001b[33m.\u001b[39mgetJSON(\u001b[0m\n\u001b[0m \u001b[90m 47 | \u001b[39m      \u001b[32m`${\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 48 | \u001b[39m\u001b[32m        chaletsData.root_url\u001b[39m\u001b[0m\n\nAdd @babel/plugin-proposal-class-properties (https://git.io/vb4SL) to the 'plugins' section of your Babel config to enable transformation.\nIf you want to leave it as-is, add @babel/plugin-syntax-class-properties (https://git.io/vb4yQ) to the 'plugins' section to enable parsing.\n    at Parser._raise (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:746:17)\n    at Parser.raiseWithData (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:739:17)\n    at Parser.expectPlugin (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:8812:18)\n    at Parser.parseClassProperty (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:12185:12)\n    at Parser.pushClassProperty (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:12145:30)\n    at Parser.parseClassMemberWithIsStatic (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:12078:14)\n    at Parser.parseClassMember (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:12015:10)\n    at /Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:11960:14\n    at Parser.withTopicForbiddingContext (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:11031:14)\n    at Parser.parseClassBody (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:11937:10)\n    at Parser.parseClass (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:11911:22)\n    at Parser.parseStatementContent (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:11198:21)\n    at Parser.parseStatement (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:11156:17)\n    at Parser.parseBlockOrModuleBlockBody (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:11731:25)\n    at Parser.parseBlockBody (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:11717:10)\n    at Parser.parseTopLevel (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:11087:10)\n    at Parser.parse (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:12768:10)\n    at parse (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/parser/lib/index.js:12821:38)\n    at parser (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/core/lib/parser/index.js:54:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/core/lib/transformation/normalize-file.js:93:38)\n    at normalizeFile.next (<anonymous>)\n    at run (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/core/lib/transformation/index.js:31:50)\n    at run.next (<anonymous>)\n    at Function.transform (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/@babel/core/lib/transform.js:27:41)\n    at transform.next (<anonymous>)\n    at step (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/gensync/index.js:254:32)\n    at /Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/gensync/index.js:266:13\n    at async.call.result.err.err (/Users/user/Local Sites/chaletscavair/app/public/wp-content/themes/chalets-theme/node_modules/gensync/index.js:216:11)");

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports) {

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
    c.addEventListener('click', function (e) {
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
  a.addEventListener('click', function (e) {
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


document.addEventListener('click', closeAllSelect); // RANGE SLIDER

(function (win, dom) {
  'use strict'; // Check for .rangeControl class

  var rangeControlList = dom.getElementsByClassName('custom-rangeInput'); // Inits components

  var init = function init() {
    // Loop all controls
    for (var i = 0; i < rangeControlList.length; i++) {
      // Apply inital
      updateController(rangeControlList[i]); // Update when changed

      rangeControlList[i].addEventListener('input', function () {
        updateController(this);
      }); // Update when changed ( for older browsers )

      rangeControlList[i].addEventListener('change', function () {
        updateController(this);
      });
    }
  }; // Updates components


  var update = function update() {
    for (var i = 0; i < rangeControlList.length; i++) {
      updateController(rangeControlList[i]);
    }
  }; // Update controller


  var updateController = function updateController(obj) {
    // Thumb Position
    var thumbPos = getThumbPercentage(obj);
    var thumPosPX = getThumbPosition(obj);

    if (obj.getAttribute('data-tooltip') != 'false') {
      updateTooltip(obj.nextElementSibling, obj.value, thumPosPX, thumbPos);
    } else {
      obj.nextElementSibling.style.display = 'none';
    }

    updateProgress(obj, '#5C5F6D', '#EDCB9B', thumbPos);
  }; // Retun range slider pixel position according to offset
  // obj : target object


  var getThumbPosition = function getThumbPosition(obj) {
    return Math.round(obj.offsetWidth / 500000 * obj.value); // Pixel
  }; // Retun range slider percentage to thumb position
  // obj : target object


  var getThumbPercentage = function getThumbPercentage(obj) {
    return Math.round(100 * obj.value / obj.getAttribute('max')); // Percentage
  }; // Updated range slider tooltip
  // obj : target object
  // text : tooltip label
  // position : absolute position
  // percentage : percentage of current value


  var updateTooltip = function updateTooltip(obj, text, position, percentage) {
    obj.innerHTML = text; // Tooltip text

    obj.style.left = position + 'px'; // Tooltip position
    // Tooltip Position

    var tooltipStartPos = 26;
    var tooltipPosFix = percentage / 1.8;

    if (percentage > 50) {
      tooltipPosFix = percentage / 2.2;
    }

    obj.style.transform = 'translate(-' + (tooltipStartPos + tooltipPosFix) + '%, 0)';
  }; // Updated background progress bar of range slider
  // obj : target object
  // progressBgColor : background color
  // progressFillColor : fill color
  // percentage : percentage of current value


  var updateProgress = function updateProgress(obj, progressBgColor, progressFillColor, percentage) {
    var rangeBg = 'linear-gradient(to right,  ' + progressFillColor + ' 0%, ' + progressFillColor + ' ' + percentage + '%, ' + progressBgColor + ' ' + percentage + '%, ' + progressBgColor + ' 100%)';
    var cssRule = '#' + obj.id + '::-webkit-slider-runnable-track { background : ' + rangeBg + ' } ';
    cssRule += '#' + obj.id + '::-moz-range-track { background : ' + rangeBg + ' } ';
    cssRule += '#' + obj.id + '::-ms-track { background : ' + rangeBg + ' } ';

    var applyStyle = function applyStyle(styleName, cssText) {
      var styleElement = dom.getElementById(styleName);
      if (styleElement) dom.getElementsByTagName('head')[0].removeChild(styleElement);
      styleElement = dom.createElement('style');
      styleElement.type = 'text/css';
      styleElement.id = styleName;
      styleElement.innerHTML = cssText;
      dom.getElementsByTagName('head')[0].appendChild(styleElement);
    };

    applyStyle('range_' + obj.id, cssRule);
  }; // Refresh on resize


  var fireOnceOnResize;
  win.addEventListener('resize', function () {
    fireOnceOnResize = setTimeout(update, 100);
  }); // Init Component

  init();
})(window, document); // ANIMATION


gsap.fromTo('.nav', {
  y: -200,
  opacity: 0
}, {
  duration: 1,
  delay: 0.8,
  y: 0,
  opacity: 1
});
gsap.fromTo('.hero', {
  y: -200,
  opacity: 0
}, {
  duration: 0.5,
  delay: 0.5,
  y: 0,
  opacity: 1,
  ease: 'power4. out'
});
gsap.fromTo('.hero__right-image', {
  x: -600,
  opacity: 0
}, {
  duration: 0.8,
  delay: 1,
  x: 0,
  opacity: 1,
  ease: 'power4. out'
}); // gallery animation

gsap.fromTo('.g-img', {
  x: -600,
  opacity: 0,
  scale: 1.5
}, {
  duration: 0.8,
  delay: 1,
  scale: 1,
  x: 0,
  opacity: 1,
  ease: 'power4. out'
});
console.log('lol'); // contact form

/***/ })

/******/ });
//# sourceMappingURL=bundle.js.map