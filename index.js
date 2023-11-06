$(document).ready(function(){
  $(".cards").slice(0, 6).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".cards:hidden").slice(0, 6).slideDown();
    if($(".cards:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
  
})