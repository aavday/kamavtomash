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
  choseTimeSecond();;
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
