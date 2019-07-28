<?php
/*
 * @lc app=leetcode.cn id=1 lang=php
 *
 * [1] 两数之和
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $found = [];
        $count = count($nums);

        for ($i = 0; $i < $count; $i++) {
            $diff = $target - $nums[$i];

            if (array_key_exists($diff, $found)) {
                return [$found[$diff], $i];
            }

            $found[$nums[$i]] = $i;
        }
    }
}

