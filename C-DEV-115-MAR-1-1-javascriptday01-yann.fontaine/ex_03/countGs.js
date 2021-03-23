function countGs(string){
    if ((typeof string)=='string'){
var count = (string.match(/G/g)).length;
return count;
}
else{
    return "Please use a string";
}
}

console.log(countGs("abcgGggGeaGfdsGG"));

console.log(countGs(2020));