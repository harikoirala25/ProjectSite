$(document).ready(function() {
  $(".nav-link").click(function() {
    $(".nav-link").css("background-color", "");
    $(this).css("background-color", "#4B7FBB");
    $(this).css("border-radius", "4px");
    $(this).css("transition", "all 2s");
  });
});
