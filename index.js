function onSuccess() {
  $('input').val('').css('display', 'none')
  $('.btn').css('display', 'block')
}

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}
$(document).ready(function () {
  $('.button').delay(350).show('clip', 500).on('click', () => {
    $('.button').css('display', 'none')
    $('input').css('display', 'block')
  })
  $('input').on('keypress', function (e) {
    let email = $(this).val()
    if(e.which === 13) {
      if (validateEmail(email)) {
        $.ajax({
          url: 'addEmail.php',
          type: 'POST',
          data: {email: email},
          success: onSuccess
        })
      } else {

      }
    }
  })
})