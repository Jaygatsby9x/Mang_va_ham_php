<!DOCTYPE html>
<html>
<head>
    <title>CALCULATOR</title>
</head>
<body>
<?php
$numberFirst = $_POST["firstNum"];
$numberSecond = $_POST["secondNum"];
$method = $_POST['method'];
$result = 0;
function calculate($first, $second, $method)
{
    global $result;
    if (isset($_POST['submit'])) {
        try {
            if ($second == 0||$first==0&&$second==0) {
                throw new Exception("Error");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            $result = "Error ";
        }
        switch ($method) {
            case "Addition":
                $result = $first + $second;
                break;
            case "Minus":
                $result = $first - $second;
                break;
            case "Division":
                $result = $first / $second;
                break;
            case "multi":
                $result = $first * $second;
                break;
        }
    }
}
calculate($numberFirst, $numberSecond, $method);
?>
<fieldset>
    <legend><h1>SIMPLE CALCULATOR</h1></legend>
    <form method="post">
        FirstNumber:<br><input name="firstNum" type="number"><br>
        <select name="method">
            <option>Addition</option>
            <option>Minus</option>
            <option>Division</option>
            <option>multi</option>
        </select><br>
        SecondNumber:<br><input name="secondNum" type="number"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</fieldset>
<fieldset>
    <legend><h1>Result</h1></legend>
    <p>Result = <?php echo $result; ?></p>
</fieldset>

</body>
</html>
