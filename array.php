<?php
function solution($A) 
{


    // write your code in PHP7.0
   /*
    Write a function:

    function solution(A);

    that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.
    
    For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.
    
    Given A = [1, 2, 3], the function should return 4.
    
    Given A = [−1, −3], the function should return 1.
    
    Assume that:
    
        N is an integer within the range [1..100,000]
        Each element of array A is an integer within the range [−1,000,000..1,000,000]
    
    Complexity:
    
        Expected worst-case time complexity is O(N)
    
    Expected worst-case space complexity is O(N)
    , beyond input storage (not counting the storage required for input arguments)

    */
    
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