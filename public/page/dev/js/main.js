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

    $("#particles-website").particles().init(
        colorParticles(
            incDarkness(
                $("#website").css("background-color")
            )
        )
    );

    $("#particles-webapp").particles().init(
        colorParticles(
            incDarkness(
                $("#webapp").css("background-color")
            )
        )
    );

    $("#particles-mobileapp").particles().init(
        colorParticles(
            incDarkness(
                $("#mobileapp").css("background-color")
            )
        )
    );

    $("#particles-deskapp").particles().init(
        colorParticles(
            incDarkness(
                $("#deskapp").css("background-color")
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
    $(".txt-wrapper").each(function() {
        observer.observe(this);
    });

    $(".img-wrapper").each(function() {
        observer.observe(this);
    });

    // Load particles
    loadParticles();
}
