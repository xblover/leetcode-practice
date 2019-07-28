<?php
/*
 * @lc app=leetcode.cn id=14 lang=php
 *
 * [14] 最长公共前缀
 *
 * https://leetcode-cn.com/problems/longest-common-prefix/description/
 *
 * algorithms
 * Easy (34.06%)
 * Likes:    622
 * Dislikes: 0
 * Total Accepted:    97.5K
 * Total Submissions: 286.4K
 * Testcase Example:  '["flower","flow","flight"]'
 *
 * 编写一个函数来查找字符串数组中的最长公共前缀。
 * 
 * 如果不存在公共前缀，返回空字符串 ""。
 * 
 * 示例 1:
 * 
 * 输入: ["flower","flow","flight"]
 * 输出: "fl"
 * 
 * 
 * 示例 2:
 * 
 * 输入: ["dog","racecar","car"]
 * 输出: ""
 * 解释: 输入不存在公共前缀。
 * 
 * 
 * 说明:
 * 
 * 所有输入只包含小写字母 a-z 。
 * 
 */
class Solution {

    /**
     简单遍历比较
     **/
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if(empty($strs)){
            return '';
        }
        if(count($strs) == 1){
            return $strs[0];
        }
        foreach($strs as $v){
            $b[] = strlen($v);
        }
        $min = min($b);
        $first = $strs[0];
        array_shift($strs);
        foreach($strs as $v){
            $str = $this->common($first,$v,$min);
            if($str == '')
            {
                return '';
            }
            $c[] = $str;
        }
        sort($c);
        return $c[0];
    }

    function common($str1,$str2,$min){
        $str = '';
        for($i=0;$i<$min;$i++){
            if($str1[$i] == $str2[$i]){
                $str .= $str1[$i];
            }else{
                break;
            }
        }
        return $str;
    }
}

