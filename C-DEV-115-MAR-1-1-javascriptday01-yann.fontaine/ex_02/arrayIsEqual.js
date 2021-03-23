function arrayIsEqual(a, b){
    if (Array.isArray(a) && Array.isArray(b)){
        return a.length === b.length && a.every((val, index) => val === b[index]);
    }
    else{
        return "Please use arrays";
    }
}

var a = [1, 2];
var b = [3, 4];
console.log(arrayIsEqual(a,b));

a = [1, 2];
b = [1, 2];
console.log(arrayIsEqual(a,b));

a = 1;
var b = [3, 4];
console.log(arrayIsEqual(a,b));