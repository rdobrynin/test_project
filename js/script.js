// Generated by CoffeeScript 1.7.1
(function() {
  $("#inlineCheckbox1").click(function() {
    return $(this).toggleClass("checked");
  });

  $("#inlineCheckbox2").click(function() {
    return $(this).toggleClass("checked");
  });

  $("#inlineCheckbox3").click(function() {
    return $(this).toggleClass("checked");
  });

  setInterval((function() {
    if ($("#inlineCheckbox1").hasClass("checked")) {
      $(".personal_group").show();
      $(".business_group").hide();
      $(".others_group").hide();
    } else if ($("#inlineCheckbox2").hasClass("checked")) {
      $(".personal_group").hide();
      $(".business_group").show();
      $(".others_group").hide();
    } else if ($("#inlineCheckbox3").hasClass("checked")) {
      $(".personal_group").hide();
      $(".business_group").hide();
      $(".others_group").show();
    } else {
      $(".personal_group").show();
      $(".business_group").show();
      $(".others_group").show();
    }
  }), 10);

  $("#submit").click(function() {
    var group, input_first_name, input_last_name, phone;
    $("#add_empty").show();
    input_first_name = void 0;
    input_last_name = void 0;
    phone = void 0;
    group = void 0;
    input_first_name = $("#input_first_name").val();
    input_last_name = $("#input_last_name").val();
    phone = $("#input_phone").val();
    group = $("#select").val();
    if (input_first_name !== "" && input_last_name !== "" && phone !== "") {
      $(".table-responsive").show();
      if (group === "first group") {
        $("table").prepend("<thead><td class=\"personal_group first_name_find\">" + input_first_name + "</td><td class=\"personal_group\">" + input_last_name + "</td><td class=\"personal_group\">" + phone + "</td><td class=\"personal_group\"><a href=\"#\"><i class=\"glyphicon glyphicon-pencil\"></i></a></td></thead>");
      } else if (group === "secondary group") {
        $("table").prepend("<thead><td class=\"business_group\">" + input_first_name + "</td><td class=\"business_group\">" + input_last_name + "</td><td class=\"business_group\">" + phone + "</td><td class=\"business_group\"><a href=\"#\"><i class=\"glyphicon glyphicon-pencil\"></i></a></td></thead>");
      } else {
        if (group === "third group") {
          $("table").prepend("<thead><td class=\"others_group\">" + input_first_name + "</td><td class=\"others_group\">" + input_last_name + "</td><td class=\"others_group\">" + phone + "</td><td class=\"others_group\"><a href=\"#\"><i class=\"glyphicon glyphicon-pencil\"></i></a></td></thead>");
        }
      }
      $("#addContact").modal("toggle");
    }
    localStorage.setItem("contacts", $("table").html());
    $("form")[0].reset();
    return false;
  });

  setInterval((function() {
    if ($("td").hasClass("personal_group") || $("td").hasClass("business_group") || $("td").hasClass("others_group")) {
      $("#add_empty").hide();
      $(".table-responsive").show();
      $(".check").show();
    } else {
      $("#add_empty").show();
      $(".table-responsive").hide();
      $(".check").hide();
    }
  }), 10);

  $("#clear_storage").click(function() {
    localStorage.clear();
    location.reload();
  });

  if (localStorage.getItem("contacts")) {
    $("table").html(localStorage.getItem("contacts"));
  }

  return;

}).call(this);
