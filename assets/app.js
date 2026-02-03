import './stimulus_bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');
window.openImage = function (src) {
    const overlay = document.getElementById('imgOverlay');
    const img = document.getElementById('imgZoom');
    img.src = src;
    overlay.classList.remove('hidden');
    overlay.classList.add('flex');
}

window.closeImage = function () {
    const overlay = document.getElementById('imgOverlay');
    overlay.classList.add('hidden');
    overlay.classList.remove('flex');
}
window.toggleMenu = function () {
    document
        .getElementById("mobileMenu")
        .classList.toggle("hidden");
}
