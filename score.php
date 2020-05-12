<?php 

// Write a function that takes such collection and counts the points of our team in the championship. 
// Rules for counting points for each match:


//     if x>y - 3 points
//     if x<y - 0 point
//     if x=y - 1 point


function points(array $games)
{
    $score = 0;
    foreach ($games as $game) {
        $explode = explode(':', $game);
        if ($explode[0] > $explode[1]) {
            $score += 3;
        }
        if ($explode[0] < $explode[1]) {
            $score += 0;
        }
        if ($explode[0] == $explode[1]) {
            $score += 1;
        }
    } 
    return $score;
}

$games1 = ['1:0','2:0','3:0','4:0','2:1','3:1','4:1','3:2','4:2','4:3']; // 30
$games2 = ['1:1','2:2','3:3','4:4','2:2','3:3','4:4','3:3','4:4','4:4']; // 10
$games3 = ['0:1','0:2','0:3','0:4','1:2','1:3','1:4','2:3','2:4','3:4']; // 0
$games4 = ['1:0','2:0','3:0','4:0','2:1','1:3','1:4','2:3','2:4','3:4']; // 15
$games5 = ['1:0','2:0','3:0','4:4','2:2','3:3','1:4','2:3','2:4','3:4']; // 12

var_dump(points($games5));