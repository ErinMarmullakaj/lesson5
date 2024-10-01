<?php
// phpinfo();


// $x = "hello";
// print_r($x);

// $x= 345;
// echo gettype($x). "<br>";
// $y = 9.7;
// echo gettype($y). "<br>";
// $z = "hello"."mirdita";
// echo gettype($z). "<br>";

// function displayPHPVersion(){
//     echo "this is php ".phpversion();
//     echo "\n";
// }

// displayPHPVersion();

// function sum(){
//     value = 546+876;
//     echo $value;
// }

// sum();

// function maximum($x,$y){
//     if($x > $y){
//         return $x;
//     }else{
//         return $y;
//     }
// }

// $a = 20;
// $b = 30;

// $test = maximum($a,$b);
// echo "the max of $a and $b is $test";


function isEven($n){
    if(($n % 2 )=== 0){
        return "the number is even";
    }
    return "number is odd";
}

print_r(isEven(35));




?>