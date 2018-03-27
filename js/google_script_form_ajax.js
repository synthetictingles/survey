var $form = $('form#test-form'),
    url = 'https://script.google.com/macros/s/AKfycbwaJLYCsn4LGOpA5bOaOaEa6AA29AppZe3JrN_5m8REaPNzykU/exec'

$('#submit-form').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serializeObject()
  }).success(
    // do something
  );
})
