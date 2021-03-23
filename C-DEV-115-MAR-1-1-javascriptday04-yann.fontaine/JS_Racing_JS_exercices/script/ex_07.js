(function(){
    window.onload=function(){
        var audio = new Audio('./triangle.ogg');
        var buttons = document.getElementsByTagName('button');
        var canvas = document.getElementsByTagName('canvas');
        if (canvas[0].getContext) {
            var ctx = canvas[0].getContext('2d');
            ctx.beginPath();
            ctx.moveTo(6, 6);
            ctx.lineTo(6, 14);
            ctx.lineTo(10, 14);
            ctx.lineTo(6, 6);
            ctx.strokeStyle= 'white';
            ctx.lineWidth= 1;
            ctx.stroke(); 
          } 
        canvas[0].addEventListener('click', function() {          
            audio.play();
        });
        buttons[0].addEventListener('click', function() {
            if(!audio.paused){
                audio.pause();
            }
            else{
                audio.play();
            }
           });
        
        buttons[1].addEventListener('click', function() {
             audio.pause();
             audio.load();
            });

            buttons[2].addEventListener('click', function() {
                if(!audio.muted){
                    audio.muted=true;
                }
                else{
                    audio.muted=false;
                }
               });
        
    }
})();