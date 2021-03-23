function arrayFilter(array, filter){
    if(Array.isArray(array)){
         return array.filter(filter);
    }
    else{
        return "Please use an Array";
    }
}

var toFilter = [1, 2, 3, 4, 5, 6, 7, 8, 9];

var passed = arrayFilter(toFilter, function (value) {return value % 3 === 0;});
console.log(passed);

var toFilter = "Godzilla";

var passed = arrayFilter(toFilter, function (value) {return value % 3 === 0;});
console.log(passed);