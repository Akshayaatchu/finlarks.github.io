/**
 * @brief auto text effect for logo
 */
 async function logoTextTypingEffect() {
    var data = "Fight! Flight! Fright!"
    var logo = $("p#slogan");
    var len  = data.length;

    var wait = (ms) => new Promise((resolve) => {
        setTimeout(resolve, ms);
    });
  
    for(let i = 0; i < len; i++) {
        logo.text(data.substring(0, i + 1));
        await wait(150);
    }
}

/**
 * @brief Scroll to Event
 */
function scrollEvent(evt) {
    if ($(window).scrollTop() > 0) {
        $("header").removeClass("theme-static").addClass("theme-scroll");
    } else {
        $("header").removeClass("theme-scroll").addClass("theme-static");
    }
}

/**
 * @brief Toggles Menu
 */
function menuToggle(evt) {
    menubtn = $("#menu-btn");
    menubar = $("#menu-bar");
    menucon = $("#menu-con");

    if(menubar.width() == 0) {
        menubar.width(280);
        menucon.fadeIn(1000);
        menubar.css('box-shadow', '0 0 0 100vw rgba(0, 0, 0, 0.5');
        menubtn.html('<i class="fas fa-arrow-right"></i>');
    } else {
        menucon.fadeOut(100);
        menubar.width(0);
        menubar.css('box-shadow', '0 0 0 0 rgba(0, 0, 0, 0.5');
        menubtn.html('<i class="fas fa-bars"></i>');
    }
}

/**
 * @brief main function
 */
function main() {
    // Start Page animations
    logoTextTypingEffect();
    $("#menu-con").hide();

    // Add Event Listeners
    $(window).on("scroll", scrollEvent);
    $("#menu-btn").on('click', menuToggle);
}
