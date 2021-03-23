var triangle = "$";

function drawTriangle(instance){
    if ((typeof instance)=='number'){
for (i=0; i<instance; i++){    
console.log(triangle);
triangle+="$";
}
}
else{
console.log('Please use a number');
}
}

drawTriangle(6);
drawTriangle('book');