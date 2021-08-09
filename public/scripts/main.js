// Copyright (c) 2021 Sri Lakshmi Kanthan P
// 
// This software is released under the MIT License.
// https://opensource.org/licenses/MIT

/**
 * Adds Nav Theme bassed on scroll
 */
function navThemeOnScroll(evt) {
    if($(window).scrollTop() != 0) {
        $('nav').addClass('nav-theme');
    } else {
        $('nav').removeClass('nav-theme');
    }
}

/**
 * Smooth scroll
 */
function smoothScroll(evt) {
    evt.preventDefault();
    var target = evt.target;
    $('html, body').animate({
        scrollTop: $(target).offset().top
    }, 1000, 'swing');
}

/**
 * main function
 */
function main() {
    $(window).scroll(navThemeOnScroll);
    $(document).on('click', 'a', smoothScroll);
}
