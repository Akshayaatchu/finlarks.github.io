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
 * comes into view on scroll
 */
function viewOnScroll(entities, observer) {
    for(let entity of entities) {
        if(entity.isIntersecting) {
            $(entity.target).addClass('in-view');
        } else {
            $(entity.target).removeClass('in-view');
        }
    }
}

/**
 * main function
 */
function main() {
    // Add Event listeners
    $("a[href^='#']").on('click', anchorClick);
    
    // Add Intersetion observer
    var observer = new IntersectionObserver(viewOnScroll, {
        threshold: 0.5,
    });

    // Add elements to observe
    $(".txt-wrapper").each(function() {
        observer.observe(this);
    });

    $(".img-wrapper").each(function() {
        observer.observe(this);
    });
}
