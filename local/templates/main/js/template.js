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
