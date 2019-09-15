<?php
function findMinArray($arr){
    $min = $arr[0];
    $index=0;
    for ($i = 1;$i< count($arr);$i++){
        if($min >$arr[$i]){
            $min = $arr[$i];
            $index = $i;
        }
    }
    echo $index .'<br>';
    echo $min;
}
findMinArray([1,3,4,5,8,-42,-13])
?>
