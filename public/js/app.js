!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=1)}([,function(e,t,n){n(2),n(9),n(14),n(16),n(18),e.exports=n(20)},function(e,t){var n=document.querySelector("header"),o=document.querySelector(".navbar"),r=document.querySelector(".navbar-brand"),u=20+(n?n.getBoundingClientRect().height:0),c=document.querySelector(".navbar-toggler"),i=document.querySelector(".navbar-collapse.collapse");function l(){document.body.scrollTop>u||document.documentElement.scrollTop>u?(o.classList.add("fixed-top"),r.style.fontSize="1.5rem",r.innerText="Rachel Bourgeois",o.minHeight="65px"):(o.classList.remove("fixed-top"),r.style.fontSize="3rem",r.innerText="Ψ",o.height="auto")}function f(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=function(e){return Math.floor(e.getBoundingClientRect().top)};e.preventDefault();var o=t?t.getAttribute("href"):this.getAttribute("href"),r=document.querySelector(o);if(r){var u=n(r);window.scrollBy({top:u-50,left:0,behavior:"smooth"})}}document.addEventListener("DOMContentLoaded",(function(){window.onscroll=l,document.querySelectorAll('a[href^="#"]').forEach((function(e){return e.onclick=f}))})),c.onclick=function(){i.classList.toggle("show")}},,,,,,,function(e,t){},,,,,function(e,t){},,function(e,t){},,function(e,t){},,function(e,t){}]);