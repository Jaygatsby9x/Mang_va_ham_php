<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<?php
function checkCount($string,$word){
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] === $word) {
            $count++;
        }
    }
    return $count;
}
$string = "day la mot chuoi";
$word = "a";
$count = checkCount($string,$word);
echo $count;
?>
</body>
</html>
