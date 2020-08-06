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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/home.js":
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  console.log('culoooo'); // FUNZIONI SCROLL --------------------------------------------------
  // FRECCIA SCROLL DOWN

  $(".fa-angle-double-down").click(function () {
    $('html,body').animate({
      scrollTop: $('#primaSezione').offset().top
    }, 'slow');
  }); // FRECCIA SCROLL UP

  $("#button-scroll-up").click(function () {
    $('html,body').animate({
      scrollTop: $('.jumbotron').offset().top
    }, 'slow');
  }); // CORSI SCROLL

  $("#corsi-button").click(function () {
    $('html,body').animate({
      scrollTop: $('#scroll-to-corsi').offset().top
    }, 'slow');
  }); // STAFF SCROLL

  $("#staff-button").click(function () {
    $('html,body').animate({
      scrollTop: $('#scroll-to-staff').offset().top
    }, 'slow');
  }); // HOME SCROLL

  $("#home-button").click(function () {
    $('html,body').animate({
      scrollTop: $('.jumbotron').offset().top
    }, 'slow');
  });
  $(function () {
    $(window).on("scroll", function () {
      if ($(window).scrollTop() > 10) {
        $("#navbar").removeClass("nav-start");
        $("#navbar").addClass("nav-scroll");
        $("header").css("top", "0");
        $("#button-scroll-up").css("display", "block");
      } else {
        $("#navbar").addClass("nav-start");
        $("#navbar").removeClass("nav-scroll");
        $("header").css("top", "50px");
        $("#button-scroll-up").css("display", "none");
      }
    });
  }); // EVENTI CLICK ------------------------------------------------------------
  // comparsa box laterale CORSI ------------------

  $('.card-corsi').click(function () {
    $('.corsi-side-content').removeClass('active');
    $(this).next().addClass('active');
  }); //scomparsa box laterale CORSI------------

  $('.fa-chevron-circle-right').click(function () {
    $(this).parent().addClass('slideOutRight');
    setTimeout(exitRight, 500);

    function exitRight() {
      $('.fa-chevron-circle-right').parent().removeClass('active');
      $('.fa-chevron-circle-right').parent().removeClass('slideOutRight');
      console.log($(this).parent());
    }
  }); // comparsa box laterale STAFF --------------------------------

  $('.card-staff').click(function () {
    $('.staff-side-content').removeClass('active');
    $(this).next().addClass('active');
  }); //scomparsa box laterale STAFF------------

  $('.fa-chevron-circle-left').click(function () {
    $(this).parent().addClass('slideOutLeft');
    setTimeout(exitLeft, 500);

    function exitLeft() {
      $('.fa-chevron-circle-left').parent().removeClass('active');
      $('.fa-chevron-circle-left').parent().removeClass('slideOutLeft');
      console.log($(this).parent());
    }
  }); // TOM TOM

  var theFlowCoordinates = [10.328510, 44.825600];
  var map = tt.map({
    container: 'map',
    key: 'GA5MivJiK0ZxoB9tGaVHIhVkwckf4jOc',
    style: 'tomtom://vector/1/basic-main',
    center: theFlowCoordinates,
    zoom: 15
  });
  var marker = new tt.Marker().setLngLat(theFlowCoordinates).addTo(map);
}); //fine document ready

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/home.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\MAMP\htdocs\PROGETTO_THE_FLOW\the-flow-accademy\project\resources\js\home.js */"./resources/js/home.js");


/***/ })

/******/ });