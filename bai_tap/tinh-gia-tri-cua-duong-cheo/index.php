<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<?php
$array = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
function sum($arr){
    $sum =0;
    for ($i=0;$i<count($arr);$i++){
        for ($j=0;$j<count($arr[$i]);$j++){
            if ($i==$j){
                $sum+=$arr[$i][$j];
            }
        }
    }
    for ($i=0,$j=count($arr[0]);$i<count($arr);$i++,$j--){
        $sum+=$arr[$i][$j];
    }
    return $sum;
}
echo sum($array);
?>
</body>
</html>
