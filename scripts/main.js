/**
 * @brief Scroll to Event
 */
function scrollEvent(evt) {
    var scrollTop = $(window).scrollTop();
    var scrollDel = $(window).height();

    if (scrollTop > scrollDel * 0.5) {
        $("header nav").addClass("nav-theme");
    } else {
        $("header nav").removeClass("nav-theme");
    }
}

/**
 * @brief main function
 */
function main() {
    $(window).on("scroll", scrollEvent);
}
