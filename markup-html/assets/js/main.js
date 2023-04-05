jQuery(document).ready(function () {
    $("#bell").click(function () {
        $("#drawer").toggle();
    });
    $("#user-opt-btn").click(function () {
        $("#user-opt-drawer").toggle();
    });
});



// Sidebar - Toggle Button
$(document).ready(function () {

    $(".sidebar-btn").click(function () {
        $(".dash-main-right").toggleClass('full-width');
        $(".dash-main-left").toggleClass('hideSidebar');
        $(".dash-main-left-inner").toggleClass('hideSidebar');
        if ($(".dash-main-left-inner").hasClass('show-left-inner')) {
            $(".dash-main-left-inner").removeClass('show-left-inner');
        } else {
            $(".dash-main-left-inner").removeClass('hide-left-inner');
        }
    })

    $(".sidebar_show_btn").click(function () {
        $(".dash-main-right").toggleClass('full-width');
        $(".dash-main-left").toggleClass('hideSidebar');
        $(".dash-main-left-inner").toggleClass('hideSidebar');
        if ($(".dash-main-left-inner").hasClass('show-left-inner')) {
            $(".dash-main-left-inner").removeClass('show-left-inner');
        } else {
            $(".dash-main-left-inner").removeClass('hide-left-inner');
        }
    })

});


// jQuery('.btn-slider').slick({
//     dots: true,
//     infinite: true,
//     speed: 300,
//     slidesToShow: 1,
//     adaptiveHeight: true
// });


// Scroll Back to top :: Start
window.onscroll = () => {
    toggleTopButton();
}
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function toggleTopButton() {
    if (document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20) {
        document.getElementById('back-to-up').classList.remove('d-none');
    } else {
        document.getElementById('back-to-up').classList.add('d-none');
    }
}
// Scroll Back to top :: End

let navbar = document.getElementById("primary-header");
let navOffset = navbar.offsetTop;
window.addEventListener("scroll", () => {
    (window.scrollY >= navOffset) ? navbar.classList.add("sticky_nav") : navbar.classList.remove("sticky_nav")
});