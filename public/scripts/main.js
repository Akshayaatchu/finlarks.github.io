// Copyright (c) 2021 Sri Lakshmi Kanthan P
// 
// This software is released under the MIT License.
// https://opensource.org/licenses/MIT


/**
 * Smooth scroll
 */
 function anchorClick(evt) {
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
    $(document).on('click', 'a', anchorClick);
}
