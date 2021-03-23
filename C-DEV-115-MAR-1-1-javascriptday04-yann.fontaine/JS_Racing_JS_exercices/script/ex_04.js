(function(){
    window.onload=function(){
let element = document.getElementsByTagName('div');
var string = []
addEventListener('keyup', (e) => {
    element[2].innerText='';
    string.push(`${e.key}`)
    if (string.length>42){
        string.shift();
    }
    string.forEach(key => element[2].append(key));
      });
    };
    })();