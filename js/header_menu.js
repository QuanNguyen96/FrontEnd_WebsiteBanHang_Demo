window.onload = function() {
    var menu_bar = document.querySelector(".header-menu_bar")
    var menu = document.querySelector(".header-bottom>ul")
    var trangthaimenu = 1;
    menu_bar.addEventListener('click', function() {
        trangthaimenu = trangthaimenu == 1 ? 0 : 1;
        if (trangthaimenu == 0) {
            menu.style.transform = "translateX(0%)"
        } else {
            menu.style.transform = "translateX(-100%)"
        }
    })
}