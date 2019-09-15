<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<?php
$arrayOne = [];
$arrayTwo = [];
function concatArray($arrayOne, $arrayTwo)
{
    $array = [];
    foreach ($arrayOne as $value) {
        array_push($array, $value);
    }
    foreach ($arrayTwo as $value) {
        array_push($array, $value);
    }
    return $array;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['submitAdd'])) {
        $arrayOne = explode(",",$_POST["stringNumberOne"]);
        $arrayTwo = explode(",",$_POST["stringNumberTwo"]);
    }
    if (!empty($arrayOne)&&!empty($arrayTwo)){
        var_dump(concatArray($arrayOne,$arrayTwo));
    }
}
?>
<form method="post">
    <input name="stringNumberOne" type="text">
    <input name="stringNumberTwo" type="text">
    <input type="submit" value="Submit" name="submitAdd">
</form>
</body>
</html>
