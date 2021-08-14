// Copyright (c) 2021 Sri Lakshmi Kanthan P
// 
// This software is released under the MIT License.
// https://opensource.org/licenses/MIT

var globals = {
    timer: 0,
}

/**
 * slide down header on mouse move
 */
function headerSlide(evt) {
    var nav = $("nav");

    if(nav.is(":hidden")) {
      nav.slideDown(200);
      globals.timer = setTimeout(() => nav.slideUp(200), 5000);
    } else {
      clearTimeout(globals.timer);
      globals.timer = setTimeout(() => nav.slideUp(200), 5000);
    }
}

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
    for (let entity of entities) {
        if (entity.isIntersecting) {
            $(entity.target).addClass('in-view');
        } else {
            $(entity.target).removeClass('in-view');
        }
    }
}

/**
 * loads particles
 */
function loadParticles() {
    function colorParticles(color) {
        let option = Object.assign(particlesJson, {});
        option.particles.color = color;
        return option;
    }

    function incDarkness(color, percent = 10) {
        let c = tinycolor(color).darken(percent).toRgbString();
        return c;
    }

    $("#particles-home").particles().init(
        colorParticles(
            incDarkness(
                $("#home").css("background-color")
            )
        )
    );

    $("#particles-about").particles().init(
        colorParticles(
            incDarkness(
                $("#about").css("background-color")
            )
        )
    );

    $("#particles-dev").particles().init(
        colorParticles(
            incDarkness(
                $("#dev").css("background-color")
            )
        )
    );

    $("#particles-seq").particles().init(
        colorParticles(
            incDarkness(
                $("#seq").css("background-color")
            )
        )
    );

    $("#particles-iot").particles().init(
        colorParticles(
            incDarkness(
                $("#iot").css("background-color")
            )
        )
    );

    $("#particles-cad").particles().init(
        colorParticles(
            incDarkness(
                $("#cad").css("background-color")
            )
        )
    );
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
    $(".txt-wrapper").each(function () {
        observer.observe(this);
    });

    $(".img-wrapper").each(function () {
        observer.observe(this);
    });

    // load particles
    loadParticles();

    // hide header
    $("nav").hide();

    // slide down header on mouse move
    $(document).mousemove(headerSlide);
}
