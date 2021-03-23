<?php
function CheckArraySum($array){
rsort($array);
$high=$array[0];
array_shift($array);
if (array_sum($array)>=$high){
if (array_sum($array)==$high){
return true;
}
else{
for($i=1; $i<count($array); $i++){
$buffer+=array[$i];
foreach($array as $value);


for($y=1; $y<count($array); $y++){
if($array[$i]
}
else{
return false;
}
}

for($i=1; $i<count($array); $i++){

for($y=1; $y<count($array); $y++){for($y=1; $y<count($array); $y++){





$arr = [4, 6, 23, 10, 1, 3];
if (check_array_sum($arr) == true)
echo “4 + 6 + 10 + 3 == 23”;

int sumValue = 10; //value you want to check, could be passed in as a parameter
  int arr[4] = {1,2,4,6};
  for (int n = 0; n < arr.length; n++){
    for (int x = 0; x < arr.length; x++){
      if ( (arr[n] + arr[x] == sumValue) && (n != x) ){ //need to ensure same slot is being added
        return true;
      }
    }
  }
  return false;
}