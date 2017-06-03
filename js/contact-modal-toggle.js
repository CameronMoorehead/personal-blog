jQuery(function($) {
  $(".contact").click(function() {
    $("#contact-modal").fadeToggle();
    $("body").append("<div class='blackout'></div>");
  })
  $("#contact-modal-exit").click(function() {
    $("#contact-modal").fadeToggle();
    $(".blackout").remove();
  })
})
