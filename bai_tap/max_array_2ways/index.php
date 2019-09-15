<?php
function max_Array_Two_Way($arr){
    $max = $arr[0][0];
    foreach ($arr as $key1 => $item){
        foreach ($item as $key2 => $value){
            if ($max <$arr[$key1][$key2]){
                $max = $arr[$key1][$key2];
            }
        }
    }
    echo "max array 2 ways is: " .$max ." vetor " . $key1  . ",". $key2;
}
max_Array_Two_Way([
    [2,4,5,7],[5,7,9,10],[3,56,8]
]);
?>

