const innerContactsMap = document.querySelector(".contacts-page");

function yandexMap() {
    const markXCoord = 55.745088;
    const markYCoord = 52.372374;
    let mobCenterXCoord = 55.747526;
    let mobCenterYCoord = 52.372577;
    let centerXCoord = 55.745374;
    let centerYCoord = 52.377037;

    if (innerContactsMap) {
        mobCenterXCoord = markXCoord;
        mobCenterYCoord = markYCoord;
        centerXCoord = markXCoord;
        centerYCoord = markYCoord;
    }

    try {
        let iconUrl =
            location.origin + "/local/templates/main/images/icons/map-icon.png";
        let mapPosition;

        if ($(window).width() <= 992) {
            mapPosition = [mobCenterXCoord, mobCenterYCoord];
        } else {
            mapPosition = [centerXCoord, centerYCoord];
        }

        var spinner = $(".ymap-container").children(".loader");
        var check_if_load = false;
        var myMapTemp, myPlacemarkTemp;

        function init() {
            var myMapTemp = new ymaps.Map("map-yandex", {
                center: [...mapPosition], // координаты центра на карте
                zoom: 16, // коэффициент приближения карты
                controls: ["zoomControl", "fullscreenControl"], // выбираем только те функции, которые необходимы при использовании
            });
            var myPlacemarkTemp = new ymaps.Placemark(
                [markXCoord, markYCoord],
                {
                    balloonContent: "Здесь может быть ваш адрес",
                },
                {
                    iconLayout: "default#imageWithContent",
                    iconImageHref: iconUrl,
                    iconImageSize: [94, 81],
                    iconImageOffset: [-45, -80],
                }
            );
            myMapTemp.geoObjects.add(myPlacemarkTemp); // помещаем флажок на карту
            var layer = myMapTemp.layers.get(0).get(0);

            waitForTilesLoad(layer).then(function () {
                // Скрываем индикатор загрузки после полной загрузки карты
                spinner.removeClass("is-active");
            });
        }

        function waitForTilesLoad(layer) {
            return new ymaps.vow.Promise(function (resolve, reject) {
                var tc = getTileContainer(layer),
                    readyAll = true;
                tc.tiles.each(function (tile, number) {
                    if (!tile.isReady()) {
                        readyAll = false;
                    }
                });
                if (readyAll) {
                    resolve();
                } else {
                    tc.events.once("ready", function () {
                        resolve();
                    });
                }
            });
        }

        function getTileContainer(layer) {
            for (var k in layer) {
                if (layer.hasOwnProperty(k)) {
                    if (
                        layer[k] instanceof
                            ymaps.layer.tileContainer.CanvasContainer ||
                        layer[k] instanceof
                            ymaps.layer.tileContainer.DomContainer
                    ) {
                        return layer[k];
                    }
                }
            }
            return null;
        }

        function loadScript(url, callback) {
            var script = document.createElement("script");

            if (script.readyState) {
                // IE
                script.onreadystatechange = function () {
                    if (
                        script.readyState == "loaded" ||
                        script.readyState == "complete"
                    ) {
                        script.onreadystatechange = null;
                        callback();
                    }
                };
            } else {
                // Другие браузеры
                script.onload = function () {
                    callback();
                };
            }

            script.src = url;
            document.getElementsByTagName("head")[0].appendChild(script);
        }

        var ymap = function () {
            $(".ymap-container").mouseenter(function () {
                if (!check_if_load) {
                    check_if_load = true;
                    spinner.addClass("is-active");
                    loadScript(
                        "https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;loadByRequire=1",
                        function () {
                            ymaps.load(init);
                        }
                    );
                }
            });
        };

        $(function () {
            ymap();
        });
    } catch (err) {
        console.log(err);
    }
}

function choseTimeSecond() {
    $("#slider-range-2").slider({
        range: true,
        min: 0,
        max: 24,
        values: [12, 18],
        slide: function (event, ui) {
            $("#from__time-2").val(ui.values[0] + ":00");
            $("#to__time-2").val(ui.values[1] + ":00");
            $("#from__time-2").css("left", ui.values[0] * 4.16 - 6 + "%");
            $("#to__time-2").css("left", ui.values[1] * 4.16 - 6 + "%");
        },
    });
    $("#from__time-2").val($("#slider-range-2").slider("values", 0) + ":00");
    $("#to__time-2").val($("#slider-range-2").slider("values", 1) + ":00");
}

window.addEventListener("DOMContentLoaded", () => {
    choseTimeSecond();
    yandexMap();
});

$(function () {
    $(".callback-request").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "/ajax/requests.php",
            type: "post",
            data: $(".callback-request").serialize(),
            dataType: "json",
            success: function () {
                alert("Спасибо, ваша заявка отправлена, ожидайте звонка!");
                location.reload();
            },
        });
    });
});

$(function () {
    $(".consult-request").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "/ajax/requests.php",
            type: "post",
            data: $(".consult-request").serialize(),
            dataType: "json",
            success: function () {
                alert("Спасибо, ваша заявка отправлена, ожидайте звонка!");
                location.reload();
            },
        });
    });
});

$(function () {
    $(".message-form").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "/ajax/messages.php",
            type: "post",
            data: $(".message-form").serialize(),
            dataType: "json",
            success: function () {
                alert("Спасибо, ваше сообщение отправлено, ожидайте звонка!");
                location.reload();
            },
        });
    });
});
