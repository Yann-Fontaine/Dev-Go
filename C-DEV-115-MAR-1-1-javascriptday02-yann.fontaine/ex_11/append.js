$(document).ready(function(){
$("#magic").click(function(){
    var input=$("#listItem").val();
    $('body').append($("<div></div>").text(input));
    });
  });