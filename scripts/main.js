// dropdown manu
// hamburger icon toggle
$("#show-menu").click(function (event){
  event.stopPropagation();
  $("#drop-nav").fadeToggle();
});

// click anywhere to close menu
$(document).click(function (){
  $("#drop-nav").fadeOut();
});

// hamburger button open transformation
$(document).ready(function (){
  $("#show-menu").click(function (){
    $(this).toggleClass("open");
  });
});

// click anywhere to toggle burger button back to closed
$(document).click(function (){
  $("#show-menu").toggleClass("open",false);
});
