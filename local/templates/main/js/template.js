const innerContactsMap = document.querySelector('.contacts-page');

function yandexMap() {
  const markXCoord = 55.745088;
  const markYCoord = 52.372374;
  let mobCenterXCoord = 55.747526;
  let mobCenterYCoord = 52.372577;
  let centerXCoord = 55.745374;
  let centerYCoord =  52.377037;

  if (innerContactsMap) {
    mobCenterXCoord = markXCoord;
    mobCenterYCoord = markYCoord;
    centerXCoord = markXCoord;
    centerYCoord =  markYCoord;
  }

  try {
      let iconUrl = location.origin + "/local/templates/main/images/icons/map-icon.png";

      if ($(window).width() <= 992) {
          ymaps.ready(() => {
              const myMap = new ymaps.Map("map-card", {
                  center: [mobCenterXCoord, mobCenterYCoord],
                  zoom: 16,
              });
              const myPlacemark = new ymaps.Placemark(
                  [markXCoord, markYCoord],
                  {
                      hintContent: "",
                      balloonContent: "",
                  },
                  {
                      // Опции.
                      iconLayout: "default#image",
                      // Своё изображение иконки метки.
                      iconImageHref: iconUrl,
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
                  center: [centerXCoord, centerYCoord],
                  zoom: 17,
              });
              const myPlacemark = new ymaps.Placemark(
                  [markXCoord, markYCoord],
                  {
                      hintContent: "",
                      balloonContent: "",
                  },
                  {
                      // Опции.
                      iconLayout: "default#image",
                      // Своё изображение иконки метки.
                      iconImageHref: iconUrl,
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

$(function() {
  $('.callback-request').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: '/ajax/requests.php',
        type: 'post',
        data: $('.callback-request').serialize(),
        dataType: 'json',
        success: function() {
          alert('Спасибо, ваша заявка отправлена, ожидайте звонка!');
          location.reload();
        }
    });
  });
});

$(function() {
  $('.consult-request').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: '/ajax/requests.php',
        type: 'post',
        data: $('.consult-request').serialize(),
        dataType: 'json',
        success: function() {
          alert('Спасибо, ваша заявка отправлена, ожидайте звонка!');
          location.reload();
        }
    });
  });
});

$(function() {
  $('.message-form').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: '/ajax/messages.php',
        type: 'post',
        data: $('.message-form').serialize(),
        dataType: 'json',
        success: function() {
          alert('Спасибо, ваше сообщение отправлено, ожидайте звонка!');
          location.reload();
        }
    });
  });
});
