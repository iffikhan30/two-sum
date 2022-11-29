<?php 
/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
    function twoSum($nums, $target) {
        $flippedArr = array_flip($nums);
        foreach ($nums as $key => $num) {
            $num2 = $target - $num;
            if (isset($flippedArr[$num2]) && $key != $flippedArr[$num2]) {
                return [$key, $flippedArr[$num2]];
            }
        }
        return [];
    } 
?>
