<?php
// Écrire un programme qui renvoi: 
// 1 - "fizz" dans le cas ou le nombre saisi en paramètre de la fonction est un multiple de 3
// 2 - "buzz" dans le cas ou le nombre saisi en paramètre de la fonction est un multiple de 5
// 3 - "fizzbuzz" dans le cas ou le nombre saisi est à la fois un multiple de 3 et de 5
// 4 - Le nombre dans le cas ou ce dernier est ni un multiple de 3, ni un multiple de 5
// 12   |       3
//______%_________
//      resultat :
//      | 4 
// Rest:|
// 0    |

function fizzbuz($param)
{
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

var_dump(fizzbuz(127));
