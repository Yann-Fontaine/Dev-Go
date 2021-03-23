(function(){
    window.onload=function(){
let element = document.getElementsByTagName('button');
console.log(element);
element[0].onclick = () =>{
    txt = document.body;
    style = window.getComputedStyle(txt, null).getPropertyValue('font-size');
    currentSize = parseFloat(style);
    txt.style.fontSize = (currentSize + 1 + 'px');
}
element[1].onclick = () =>{
    txt = document.body;
    style = window.getComputedStyle(txt, null).getPropertyValue('font-size');
    currentSize = parseFloat(style);
    txt.style.fontSize = (currentSize - 1 + 'px');
        }
        var getSelect = document.getElementsByTagName("select");
        getSelect[0].addEventListener('change', function (){
        var selection = getSelect[0].options[getSelect[0].selectedIndex].value;
        document.body.style.backgroundColor = selection;
        })
    };
})();