#coffee --watch --compile script.coffee
$('#submit').click ->
  ul = $('#numbers')
  input_first_name = $('#input_first_name').val()
  input_last_name = $('#input_last_name').val()
  phone = $('#input_phone').val()
  $(ul).prepend  '<li><span>Name: ' + input_first_name + ' ' + input_last_name + '  <br/>Number: ' + phone + '</span></li>'
  localStorage.setItem 'contacts', $(ul).html()
  $("form")[0].reset();
  return false

if localStorage.getItem 'contacts'
  $('#numbers').html localStorage.getItem 'contacts'