
  $("#inlineCheckbox1").click ->
    $(this).toggleClass "checked"

  $("#inlineCheckbox2").click ->
    $(this).toggleClass "checked"

  $("#inlineCheckbox3").click ->
    $(this).toggleClass "checked"

  setInterval (->
    if $("#inlineCheckbox1").hasClass("checked")
      $(".personal_group").show()
      $(".business_group").hide()
      $(".others_group").hide()
    else if $("#inlineCheckbox2").hasClass("checked")
      $(".personal_group").hide()
      $(".business_group").show()
      $(".others_group").hide()
    else if $("#inlineCheckbox3").hasClass("checked")
      $(".personal_group").hide()
      $(".business_group").hide()
      $(".others_group").show()
    else
      $(".personal_group").show()
      $(".business_group").show()
      $(".others_group").show()
    return
  ), 10
  $("#submit").click ->
    $("#add_empty").show()
    input_first_name = undefined
    input_last_name = undefined
    phone = undefined
    group = undefined
    input_first_name = $("#input_first_name").val()
    input_last_name = $("#input_last_name").val()
    phone = $("#input_phone").val()
    group = $("#select").val()
    if input_first_name isnt "" and input_last_name isnt "" and phone isnt ""
      $(".table-responsive").show()
      if group is "first group"
        $("table").prepend "<thead><td class=\"personal_group first_name_find\">" + input_first_name + "</td><td class=\"personal_group\">" + input_last_name + "</td><td class=\"personal_group\">" + phone + "</td><td class=\"personal_group\"><a href=\"#\"><i class=\"glyphicon glyphicon-pencil\"></i></a></td></thead>"
      else if group is "secondary group"
        $("table").prepend "<thead><td class=\"business_group\">" + input_first_name + "</td><td class=\"business_group\">" + input_last_name + "</td><td class=\"business_group\">" + phone + "</td><td class=\"business_group\"><a href=\"#\"><i class=\"glyphicon glyphicon-pencil\"></i></a></td></thead>"
      else $("table").prepend "<thead><td class=\"others_group\">" + input_first_name + "</td><td class=\"others_group\">" + input_last_name + "</td><td class=\"others_group\">" + phone + "</td><td class=\"others_group\"><a href=\"#\"><i class=\"glyphicon glyphicon-pencil\"></i></a></td></thead>"  if group is "third group"
      $("#addContact").modal "toggle"
    localStorage.setItem "contacts", $("table").html()
    $("form")[0].reset()
    false

  setInterval (->
    if $("td").hasClass("personal_group") or $("td").hasClass("business_group") or $("td").hasClass("others_group")
      $("#add_empty").hide()
      $(".table-responsive").show()
      $(".check").show()
    else
      $("#add_empty").show()
      $(".table-responsive").hide()
      $(".check").hide()
    return
  ), 10
  $("#clear_storage").click ->
    localStorage.clear()
    location.reload()
    return

  $("table").html localStorage.getItem("contacts")  if localStorage.getItem("contacts")
  return