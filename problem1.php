<?php
/**
 * @param String[] $ops - List of operations;
 * @return Integer -sum of scores after performing all opetation;
 */

$ops = ["5", "2", "C", "D", "+"];
//$ops = ["1"];

class Solution {
    function calPoints($ops) {
        $sum;
        
        for($i = 0; $i < count($ops); $i++) {
            if(intval($ops[$i]) != 0) {
                $sum[] = $ops[$i];
            } 
            if($ops[$i] == "C") {
                $canceled = array_pop($sum); 
            }
            if($ops[$i] == "D") {
                $doubled = end($sum);
                $doubled = $doubled * 2;
                $sum[] = $doubled;
            }
            if($ops[$i] == "+") {
                $plus = $sum[count($sum) - 1] + $sum[count($sum) - 2];
                $sum[] = $plus;
            }
        }
        echo (array_sum($sum));
    
    } 
    

}

//$ops = explode(' ', readline());

$solution = new Solution();
$output = $solution->calPoints($ops);

echo $output;

?>

