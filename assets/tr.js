!function(n){function t(o){if(e[o])return e[o].exports;var r=e[o]={i:o,l:!1,exports:{}};return n[o].call(r.exports,r,r.exports,t),r.l=!0,r.exports}var e={};t.m=n,t.c=e,t.i=function(n){return n},t.d=function(n,e,o){t.o(n,e)||Object.defineProperty(n,e,{configurable:!1,enumerable:!0,get:o})},t.n=function(n){var e=n&&n.__esModule?function(){return n.default}:function(){return n};return t.d(e,"a",e),e},t.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},t.p="",t(t.s=40)}({40:function(n,t,e){"use strict";var o=document.createElement("script");o.innerHTML="\n(function (window, document) {\n    function initLoad () {\n        const f = document.getElementsByTagName('script')[0]\n        const s = document.createElement('script')\n        s.async = true\n        s.src = '//traccoon.intellectsoft.net/traccoon.js'\n\n        f.parentNode.insertBefore(s, f)\n    }\n    initLoad()\n})(window, document);\n",o.type="text/javascript",document.addEventListener("DOMContentLoaded",function(){return document.body.appendChild(o)}),window.setCookie=function(n,t,e){var o=new Date;o.setTime(o.getTime()+1e3*e);var r="expires="+o.toUTCString();document.cookie=n+"="+t+";"+r+";path=/"}}});







$(document).ready(function(){ 
	var touch 	= $('#resp-menu');
	var menu 	= $('.menu');
 
	$(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var w = $(window).width();
		if(w > 767 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
	
});