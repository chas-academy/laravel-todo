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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/micromodal/dist/micromodal.es.js":
/*!*******************************************************!*\
  !*** ./node_modules/micromodal/dist/micromodal.es.js ***!
  \*******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var version="0.3.1",classCallCheck=function(e,o){if(!(e instanceof o))throw new TypeError("Cannot call a class as a function")},createClass=function(){function e(e,o){for(var t=0;t<o.length;t++){var i=o[t];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(o,t,i){return t&&e(o.prototype,t),i&&e(o,i),o}}(),toConsumableArray=function(e){if(Array.isArray(e)){for(var o=0,t=Array(e.length);o<e.length;o++)t[o]=e[o];return t}return Array.from(e)},MicroModal=function(){var e=["a[href]","area[href]",'input:not([disabled]):not([type="hidden"]):not([aria-hidden])',"select:not([disabled]):not([aria-hidden])","textarea:not([disabled]):not([aria-hidden])","button:not([disabled]):not([aria-hidden])","iframe","object","embed","[contenteditable]",'[tabindex]:not([tabindex^="-"])'],o=function(){function o(e){var t=e.targetModal,i=e.triggers,n=void 0===i?[]:i,a=e.onShow,r=void 0===a?function(){}:a,s=e.onClose,l=void 0===s?function(){}:s,c=e.openTrigger,d=void 0===c?"data-micromodal-trigger":c,u=e.closeTrigger,h=void 0===u?"data-micromodal-close":u,f=e.disableScroll,v=void 0!==f&&f,g=e.disableFocus,m=void 0!==g&&g,b=e.awaitCloseAnimation,y=void 0!==b&&b,k=e.debugMode,w=void 0!==k&&k;classCallCheck(this,o),this.modal=document.getElementById(t),this.config={debugMode:w,disableScroll:v,openTrigger:d,closeTrigger:h,onShow:r,onClose:l,awaitCloseAnimation:y,disableFocus:m},n.length>0&&this.registerTriggers.apply(this,toConsumableArray(n)),this.onClick=this.onClick.bind(this),this.onKeydown=this.onKeydown.bind(this)}return createClass(o,[{key:"registerTriggers",value:function(){for(var e=this,o=arguments.length,t=Array(o),i=0;i<o;i++)t[i]=arguments[i];t.forEach(function(o){o.addEventListener("click",function(){return e.showModal()})})}},{key:"showModal",value:function(){this.activeElement=document.activeElement,this.modal.setAttribute("aria-hidden","false"),this.modal.classList.add("is-open"),this.setFocusToFirstNode(),this.scrollBehaviour("disable"),this.addEventListeners(),this.config.onShow(this.modal)}},{key:"closeModal",value:function(){var e=this.modal;this.modal.setAttribute("aria-hidden","true"),this.removeEventListeners(),this.scrollBehaviour("enable"),this.activeElement.focus(),this.config.onClose(this.modal),this.config.awaitCloseAnimation?this.modal.addEventListener("animationend",function o(){e.classList.remove("is-open"),e.removeEventListener("animationend",o,!1)},!1):e.classList.remove("is-open")}},{key:"scrollBehaviour",value:function(e){if(this.config.disableScroll){var o=document.querySelector("body");switch(e){case"enable":Object.assign(o.style,{overflow:"initial",height:"initial"});break;case"disable":Object.assign(o.style,{overflow:"hidden",height:"100vh"})}}}},{key:"addEventListeners",value:function(){this.modal.addEventListener("touchstart",this.onClick),this.modal.addEventListener("click",this.onClick),document.addEventListener("keydown",this.onKeydown)}},{key:"removeEventListeners",value:function(){this.modal.removeEventListener("touchstart",this.onClick),this.modal.removeEventListener("click",this.onClick),document.removeEventListener("keydown",this.onKeydown)}},{key:"onClick",value:function(e){e.target.hasAttribute(this.config.closeTrigger)&&(this.closeModal(),e.preventDefault())}},{key:"onKeydown",value:function(e){27===e.keyCode&&this.closeModal(e),9===e.keyCode&&this.maintainFocus(e)}},{key:"getFocusableNodes",value:function(){var o=this.modal.querySelectorAll(e);return Object.keys(o).map(function(e){return o[e]})}},{key:"setFocusToFirstNode",value:function(){if(!this.config.disableFocus){var e=this.getFocusableNodes();e.length&&e[0].focus()}}},{key:"maintainFocus",value:function(e){var o=this.getFocusableNodes();if(this.modal.contains(document.activeElement)){var t=o.indexOf(document.activeElement);e.shiftKey&&0===t&&(o[o.length-1].focus(),e.preventDefault()),e.shiftKey||t!==o.length-1||(o[0].focus(),e.preventDefault())}else o[0].focus()}}]),o}(),t=null,i=function(e,o){var t=[];return e.forEach(function(e){var i=e.attributes[o].value;void 0===t[i]&&(t[i]=[]),t[i].push(e)}),t},n=function(e){if(!document.getElementById(e))return console.warn("MicroModal v"+version+": ❗Seems like you have missed %c'"+e+"'","background-color: #f8f9fa;color: #50596c;font-weight: bold;","ID somewhere in your code. Refer example below to resolve it."),console.warn("%cExample:","background-color: #f8f9fa;color: #50596c;font-weight: bold;",'<div class="modal" id="'+e+'"></div>'),!1},a=function(e){if(e.length<=0)return console.warn("MicroModal v"+version+": ❗Please specify at least one %c'micromodal-trigger'","background-color: #f8f9fa;color: #50596c;font-weight: bold;","data attribute."),console.warn("%cExample:","background-color: #f8f9fa;color: #50596c;font-weight: bold;",'<a href="#" data-micromodal-trigger="my-modal"></a>'),!1},r=function(e,o){if(a(e),!o)return!0;for(var t in o)n(t);return!0};return{init:function(e){var t=Object.assign({},{openTrigger:"data-micromodal-trigger"},e),n=[].concat(toConsumableArray(document.querySelectorAll("["+t.openTrigger+"]"))),a=i(n,t.openTrigger);if(!0!==t.debugMode||!1!==r(n,a))for(var s in a){var l=a[s];t.targetModal=s,t.triggers=[].concat(toConsumableArray(l)),new o(t)}},show:function(e,i){var a=i||{};a.targetModal=e,!0===a.debugMode&&!1===n(e)||(t=new o(a)).showModal()},close:function(){t.closeModal()}}}();/* harmony default export */ __webpack_exports__["default"] = (MicroModal);


/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var micromodal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! micromodal */ "./node_modules/micromodal/dist/micromodal.es.js");

micromodal__WEBPACK_IMPORTED_MODULE_0__["default"].init();

/***/ }),

/***/ "./resources/sass/index.sass":
/*!***********************************!*\
  !*** ./resources/sass/index.sass ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/index.sass ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /mnt/c/Dev/todo/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /mnt/c/Dev/todo/resources/sass/index.sass */"./resources/sass/index.sass");


/***/ })

/******/ });