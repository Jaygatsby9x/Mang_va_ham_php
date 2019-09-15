<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<?php
function remove($arr,$num){
    $array = [];
    for($i=0; $i<checkCount($arr); $i++){
        if ($arr[$i]===$num){
            for ($j=$i; $j<checkCount($arr)-1; $j++){
                $arr[$j]=$arr[$j+1];
            }
        }
        else $array[$i]=$arr[$i];
    }
    return $array;
}
?>
<form method="post">
    nhap so ban muon xoa khoi mang:<br>
    <input name="number" type="number" ><br>
    <input type="submit" value="submit" >
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $arr = [1,2,3,4,5,6,7,8];
    $number = +$_POST["number"];
    $arr1 = remove($arr,$number);
    var_dump($arr1);
}
?>
</body>
</html>
