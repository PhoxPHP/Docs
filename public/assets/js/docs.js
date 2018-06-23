"use strict";

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var docs = new (function () {
  function o() {}return o.prototype.home = function () {
    $("#modal").iziModal();
  }, o.prototype["default"] = function () {
    $("#uiMenuToggle").click(function () {
      $("#uiMenuTarget").slideToggle(200);
    });
  }, o.prototype.documentation = function () {}, o.prototype.use = function (t) {
    (typeof t === "undefined" ? "undefined" : _typeof(t)) !== undefined && this[t] !== undefined ? this[t].call(this, o) : console.log("Error: No handle available to call."), this["default"]();
  }, o;
}())();
