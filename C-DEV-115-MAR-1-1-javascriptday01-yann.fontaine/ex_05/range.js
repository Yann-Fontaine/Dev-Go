function range(start, end, step=1){
    if ((typeof start)=='number' && (typeof end)=='number' && (typeof step)=='number'){
    var i=start;
    var numbers=[];
    if (end<start){
        while (i>=end){
                numbers.push(i);
                i-=Math.abs(step);  
        }
    }
    else{
        while (i<=end){
            numbers.push(i);
            i+=step;
        }
    }
    return numbers;
}
else{
    return "Please use numbers"
}
}

console.log(range(1, 10, 2));
console.log(range(19, 22));
console.log(range(5, 2, -1));
console.log(range('foo', 'bar'));