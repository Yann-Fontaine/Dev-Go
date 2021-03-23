$(document).ready(function(){
  $("p").on({
    mouseenter: function(){
      $(this).css("background-color", "lightgray");
    },
    mouseleave: function(){
      $(this).css("background-color", "white");
    },
    click: function(){
      $(this).hide();
    }
  })
  }); 