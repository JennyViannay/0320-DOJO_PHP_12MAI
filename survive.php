<?php

// Jenny is on a way to the castle to complete a mission. 
// However, she's been told that the castle is surrounded with a couple of powerful dragons! 
// Each dragon takes 2 bullets to be defeated, Jenny has no idea how many bullets she should carry.. 
// Assuming Jenny's gonna grab a specific given number of bullets and move forward to fight another specific 
// given number of dragons, will she survive?

//si mes bullets > (dragon  * 2) => yeaaaah

function jennySurvive($bullets, $dragons)
{
    if ($bullets >= ($dragons * 2)){
        return "Tu es vivant, felicitation";
    } else {
        return false;
    }
    
}
var_dump(jennySurvive(10, 5)); // true
var_dump(jennySurvive(7, 4)); // false 
var_dump(jennySurvive(4, 5)); // false
var_dump(jennySurvive(100, 40)); // true 
var_dump(jennySurvive(1500, 751)); // false 
var_dump(jennySurvive(0, 1)); // false 