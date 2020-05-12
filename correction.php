<?php 

// SCORE //
function points(array $games)
{
    $count = 0;
    foreach($games as $game){
        $array = explode(':', $game);
        if($array[0] > $array[1]){
            $count += 3;
        }
        if($array[0] < $array[1]){
            $count += 0;
        }
        if($array[0] == $array[1]){
            $count += 1;
        }
    }
    return $count;
}

// SURVIVE //
function jennySurvive($bullets, $dragons)
{
   if($bullets >= ($dragons * 2)){
       return true;
   }
   return false;
}

// LOVE //
function lovefunc($flower1, $flower2) {
    if((($flower1 % 2) && !($flower2 % 2)) || (($flower2 % 2) && !($flower1 % 2))){
        return true;
    }
    return false;
}

// ONION PAS FINI ++//
function is_onion_array($a) {
    if( ($a[0] >=0 && $a[count($a) - 1] >= 0 ) && ( ($a[0] + $a[count($a) - 1]) <= 10 )){
        return true;
    } else {
        return false;  
    } 
}

// FIZZBUZZ //
function fizzbuz($param) 
{
    if ($param % 15 == 0) {
        return 'fizzbuzz';
    } 
    if ($param % 3 == 0) {
        return 'fizz';
    } 
    if ($param % 5 == 0) {
        return 'buzz';
    } else {
        return $param;
    }
}

// OU 
function fizzbuzBis($param){
    switch ($param) {
        case ($param % 15 == 0):
            return "fizzbuzz";
            break;
        case ($param % 3 == 0):
            return "fizz";
            break;
        case ($param % 5 == 0):
            return "buzz";
            break;
        default:
            return $param;
    }
}