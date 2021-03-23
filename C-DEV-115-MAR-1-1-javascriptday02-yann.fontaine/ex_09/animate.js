$(document).ready(function(){
$(".platypus").click(function(){
    $(this).animate({
      right: '150px'
    });
    $(this).animate({
        bottom: '200px'
      });
      $(this).css({
        backgroundColor: 'green'
      });
})  
  });  