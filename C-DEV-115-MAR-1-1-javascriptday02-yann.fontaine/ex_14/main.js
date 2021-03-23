$(document).ready(function(){
    $("p").hover(function(){
        $(this).addClass("blue");
        $(".blue").click(function(){
            var value;
            if($(this)){
                value=$(this).val();
                $(this).empty();
            }else{
                $(this).append(value);
            }
        });
      });
    });