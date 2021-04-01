function preloader() {
    var keys = {
        37: 1,
        38: 1,
        39: 1,
        40: 1,
    };

    function preventDefault(e) {
        e = e || window.event;
        if (e.preventDefault) e.preventDefault();
        e.returnValue = false;
    }

    function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
    }

    function disableScroll() {
        if (window.addEventListener)
            // older FF
            window.addEventListener("DOMMouseScroll", preventDefault, false);
        window.onwheel = preventDefault; // modern standard
        window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
        window.ontouchmove = preventDefault; // mobile
        document.onkeydown = preventDefaultForScrollKeys;
    }

    function enableScroll() {
        if (window.removeEventListener)
            window.removeEventListener("DOMMouseScroll", preventDefault, false);
        window.onmousewheel = document.onmousewheel = null;
        window.onwheel = null;
        window.ontouchmove = null;
        document.onkeydown = null;
    }
    disableScroll();

    var preloader = document.getElementById("preloader"),
        images = document.images,
        imagesTotalCount = images.length,
        imagesLoadedCount = 0;
    if (images.length == 0) {
        imageLoaded();
    }
    for (var i = 0; i < imagesTotalCount; i++) {
        imageClone = new Image();
        imageClone.onload = imageLoaded;
        imageClone.onerror = imageLoaded;
        imageClone.src = images[i].src;
    }

    function imageLoaded() {
        imagesLoadedCount++;
        if (imagesLoadedCount >= imagesTotalCount) {
            preloader.classList.add("animate__animated");
            preloader.classList.add("animate__fadeOut");
            setTimeout(function () {
                enableScroll();
                preloader.parentNode.removeChild(preloader);
            }, 500);
        }
    }
}

function lazyLoad() {
    $(".lazy").Lazy();
}

function sliders() {
    $("#project-slider").owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        navText: ["", ""],
        dots: false,
        items: 3,
        autoplay: false,
        responsive: {
            0: {
                items: 1,
                dots: true,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 3,
            },
        },
    });
}

function yandexMap() {
    try {
        if ($(window).width() <= 992) {
            ymaps.ready(() => {
                const myMap = new ymaps.Map("map-card", {
                    center: [55.747526, 52.372577],
                    zoom: 16,
                });
                const myPlacemark = new ymaps.Placemark(
                    [55.745088, 52.372374],
                    {
                        hintContent: "",
                        balloonContent: "",
                    },
                    {
                        // Опции.
                        iconLayout: "default#image",
                        // Своё изображение иконки метки.
                        iconImageHref: "images/icons/map-icon.png",
                        // Размеры метки.
                        iconImageSize: [94, 81],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).
                        iconImageOffset: [-40, -80],
                    }
                );
                myMap.behaviors.disable("scrollZoom");
                myMap.geoObjects.add(myPlacemark);
            });
        } else {
            ymaps.ready(() => {
                const myMap = new ymaps.Map("map-card", {
                    center: [55.745374, 52.377037],
                    zoom: 17,
                });
                const myPlacemark = new ymaps.Placemark(
                    [55.745088, 52.372374],
                    {
                        hintContent: "",
                        balloonContent: "",
                    },
                    {
                        // Опции.
                        iconLayout: "default#image",
                        // Своё изображение иконки метки.
                        iconImageHref: "images/icons/map-icon.png",
                        // Размеры метки.
                        iconImageSize: [94, 81],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).
                        iconImageOffset: [-45, -80],
                    }
                );
                myMap.behaviors.disable("scrollZoom");
                myMap.geoObjects.add(myPlacemark);
            });
        }
    } catch (err) {
        console.log(err);
    }
}

function burgerIcon() {
    document.querySelector(".menu").addEventListener("click", function () {
        if ($(this).is(".active:not(.back)")) {
            $(this).addClass("back");
        } else if ($(this).is(".back")) {
            $(this).removeClass("back");
        } else {
            $(this).addClass("active");
        }
    });
}

function stickyFooter() {
    let height = $("footer").innerHeight();
    $("body").css("margin-bottom", height);
    $("footer").addClass("sticky_footer");
    $(window).on("resize", function () {
        height = $("footer").innerHeight();
        $("body").css("margin-bottom", height);
    });
}

function animation() {
    $.fn.animated = function (inEffect) {
        $(this).each(function () {
            var ths = $(this);
            ths.css("opacity", "0")
                .addClass("animate__animated")
                .waypoint(
                    function (dir) {
                        if (dir === "down") {
                            ths.addClass(inEffect).css("opacity", "1");
                        }
                    },
                    {
                        offset: "90%",
                    }
                );
        });
    };

    $(".greeting__title").animated(
        "animate__bounceInLeft",
        "animate__bounceOutLeft"
    );
    $(".greeting__list").animated(
        "animate__bounceInLeft",
        "animate__bounceOutLeft"
    );
    $(".greeting__img").animated(
        "animate__bounceInRight",
        "animate__bounceOutRight"
    );
    $(".about__wrapper").animated("animate__fadeIn", "animate__fadeOut");

    $(".jotun").animated("animate__fadeIn", "animate__fadeOut");

    $(".jotun .subtitle").animated(
        "animate__slideInLeft",
        "animate__slideOutLeft"
    );
    $(".jotun p").animated("animate__slideInLeft", "animate__slideOutLeft");

    $(".decoterm").animated("animate__fadeIn", "animate__fadeOut");

    $(".decoterm .subtitle").animated(
        "animate__slideInRight",
        "animate__slideOutRight"
    );

    $(".decoterm p").animated(
        "animate__slideInRight",
        "animate__slideOutRight"
    );

    $(".fire-protection").animated("animate__fadeIn", "animate__fadeOut");

    $(".fire-protection__use").animated(
        "animate__slideInLeft",
        "animate__slideOutLeft"
    );

    $(".project__wrapper").animated("animate__fadeIn", "animate__fadeOut");
    $(".contact__block").animated(
        "animate__slideInRight",
        "animate__slideOutRight"
    );
}

function choseTime() {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 24,
        values: [12, 18],
        slide: function (event, ui) {
            $("#from__time").val(ui.values[0] + ":00");
            $("#to__time").val(ui.values[1] + ":00");
            $("#from__time").css("left", ui.values[0] * 4.16 - 6 + "%");
            $("#to__time").css("left", ui.values[1] * 4.16 - 6 + "%");
        },
    });
    $("#from__time").val($("#slider-range").slider("values", 0) + ":00");
    $("#to__time").val($("#slider-range").slider("values", 1) + ":00");
}

window.addEventListener("DOMContentLoaded", () => {
    sliders();
    stickyFooter();
    lazyLoad();
    preloader();
    burgerIcon();
    yandexMap();
    animation();
    choseTime();
});
