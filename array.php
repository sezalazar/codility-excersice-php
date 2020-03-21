<?php
function solution($A) 
{
    // write your code in PHP7.0

    $min = min($A);
    $minPosition = array_search($min, $A);

    unset($A[$minPosition]);
    $count = count($A);
    
    for ($i = 0; $i < $count; $i++) 
    {
        $minFor = min($A);

        /*echo '$minFor: ' . $minFor . '<br>';*/

        $minForPosition = array_search($minFor, $A);
        unset($A[$minForPosition]);

        $dif =  $minFor -  $min;
        if ($dif > 1)
        {
            $min++;
            if ($min < 0)
            {
                $min = 1;
            }
            return $min;
        }
        $min = $minFor;
    }
    $minFor++;
    return $minFor++;
}


echo solution([1, 3, 6, 4, 1, 2]) . '<br>';
echo solution([1, 2, 3]) . '<br>';
echo solution([-1, -3]) . '<br>';

?>