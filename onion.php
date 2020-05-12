<?php 
// An onion array is an array that satisfies the following condition for all values of j and k:
//     If all of the following are true:

//     j >= 0
//     k >= 0

//     j + k = count(array) - 1   |  4 | [i = 0 1, i = 1 2, i = 2 19, i = 3 4, i = 4 5]
//     j != k  => if($array[0] != $array[count($array) -1]){}

//     then :
//     a[j] + a[k] <= 10

//     Examples:
//     [1, 2, 19, 4, 5]   =>  true  (as 1+5 <= 10 and 2+4 <= 10)
//     [1, 2, 19, 4, 10]  =>  false (as 1+10 > 10)
    
// Write a function named isOnionArray/IsOnionArray/is_onion_array() 
// that returns true if its argument is an onion array 
// and returns false if it is not.


// Si J >= 0 et K >= 0 
// Si J != K
// Si J + K <= 10 


function is_onion_array($a) {
    $index = count($a) -1 ;
    if (($a[0]>= 0 && $a[$index]>=0) && ($a[0] != $a[$index]) && ($a[0] + $a[$index] <= 10)) {
        return true;
    } else {
        return false;
    }
}

var_dump(is_onion_array([6, 0, 4])); // true
var_dump(is_onion_array([1, 1, 15, 10, -1])); // false 
var_dump(is_onion_array([1, 2, 19, 4, 5])); // true
var_dump(is_onion_array([1, 2, 19, 4, 8])); //false
var_dump(is_onion_array([1, 2, 19, 4, 1])); //false