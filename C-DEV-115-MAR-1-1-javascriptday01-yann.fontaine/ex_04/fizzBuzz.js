var numbers=[];
var fizz="Fizz";
var buzz="Buzz";
var string;
function fizzBuzz(){
    for (i=1; i<=20; i++){
        if (i==1){
            numbers.push(i);
        }
        else if (i%3==0 && i%5==0){
        numbers.push(" "+fizz+buzz);
        }
        else if (i%3==0){
        numbers.push(" "+fizz);
        }
        else if (i%5==0){
            if (i==20){
            numbers.push(" "+buzz);
            }
            else{
            numbers.push(" "+buzz);
            }
        }
        else{
        numbers.push(" "+i);
        }
    }
string = numbers.toString();
console.log(string);
}
fizzBuzz();