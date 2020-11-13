// window._ = require('lodash');

try {
    // window.Popper = require('popper.js').default;
    // window.$ = window.jQuery = require('jquery');

    // require('bootstrap');
} catch (e) {}
// window.axios = require('axios');
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const header = document.querySelector('header')
const navbar = document.querySelector('.navbar');
const navbarBrand = document.querySelector('.navbar-brand');
const sizeScrollNav = 20 + (header?header.getBoundingClientRect().height:0);
const navbarToggler = document.querySelector('.navbar-toggler');
const navbarCollapse = document.querySelector('.navbar-collapse.collapse');


function scrollFunction() {
    if (document.body.scrollTop > sizeScrollNav || document.documentElement.scrollTop > sizeScrollNav) {
        navbar.classList.add('fixed-top');
        navbarBrand.style.fontSize = "1.5rem";
        navbarBrand.innerText = "Rachel Bourgeois";
        navbar.minHeight = '65px';
    } else {
        navbar.classList.remove('fixed-top');
        navbarBrand.style.fontSize = "3rem";
        navbarBrand.innerText = "Ψ";
        navbar.height = 'auto';
    }
}

function scrollAnchors(e, respond = null) {
	const distanceToTop = el => Math.floor(el.getBoundingClientRect().top);
	e.preventDefault();
	var targetID = (respond) ? respond.getAttribute('href') : this.getAttribute('href');
	const targetAnchor = document.querySelector(targetID);
	if (!targetAnchor) return;
    const originalTop = distanceToTop(targetAnchor);
	window.scrollBy({ top: originalTop-50, left: 0, behavior: 'smooth' });
}

document.addEventListener("DOMContentLoaded", function() {
    window.onscroll = scrollFunction;
        
    document.querySelectorAll('a[href^="#"]').forEach(el => (el.onclick = scrollAnchors));
});


navbarToggler.onclick = function() {
    navbarCollapse.classList.toggle('show');
}