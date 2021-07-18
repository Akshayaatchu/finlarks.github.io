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
        menubar.width(300);
        menucon.fadeIn();
        menubar.css('box-shadow', '0 0 0 100vw rgba(0, 0, 0, 0.5');
        menubtn.html('<i class="fas fa-arrow-right"></i>');
    } else {
        menucon.fadeOut();
        menubar.width(0);
        menubar.css('box-shadow', '0 0 0 0 rgba(0, 0, 0, 0.5');
        menubtn.html('<i class="fas fa-bars"></i>');
    }
}

/**
 * @brief main function
 */
function main() {
    $(window).on("scroll", scrollEvent);
    $("#menu-btn").on('click', menuToggle);
}
