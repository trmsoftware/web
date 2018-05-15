$( document ).ready(function() {

    // CARROUSEL ICON

    var e = document.querySelector(".floater");
    if (null !== e) {
        var t = e.querySelector(".wrap"),
            n = t.offsetWidth,
            o = e.querySelector(".inner"),
            i = 1,
            r = n,
            a = window.innerWidth - r;
        a / r > 0 && (i += Math.ceil(a / r));
        for (var c = 0; c < i; c++) {
            var s = t.cloneNode(!0);
            o.appendChild(s)
        }
        var l = document.createTextNode("@keyframes slide { 0% {transform:translate(0, 0)} 100% {transform:translate(-" + n + "px, 0);} }"),u = document.createElement("style");
        u.type = "text/css", u.appendChild(l), document.head.appendChild(u), o.classList.add("slide")
    }

});

// SHOW MODAL HELP
$(window).scroll(function() {
    if ( $(".navbar").offset().top > 300 ) {
        $(".modal-help").addClass("open");
        $(".navbar img").addClass("open-img");
    } else {
        $(".modal-help").removeClass("open");
        $(".navbar img").removeClass("open-img");
    }
});

// SCROLL IN PAGE MENU

$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});

// SCROLL TO TOP

$('.top').on('click', function(event) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 1000);
});
