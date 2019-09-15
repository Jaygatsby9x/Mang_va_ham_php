<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<style>
    form {
        border: 1px solid black;
        padding: 10px;
        width: 500px;
        text-align: center;
    }
    table {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
        width: 500px;
    }
    th, td {
        padding-left: 10px;
        border-bottom: 1px solid black;
        text-align: left;
    }
    img {
        width: 50px;
        height: 50px;
    }
</style>
<body>
<?php
$customList = array(
    "1" => array("name" => "Mai văn Hoàng",
        "birthday" => "2000-08-20",
        "address" => "ha noi",
        "anh" => "klaus.jpg"
    ),
    "2" => array("name" => "Nguyen van Nam",
        "birthday" => "1999-08-20",
        "address" => "Bac Giang",
        "anh" => "klaus.jpg"
    ),
    "3" => array("name" => "Nguyen Thai hoa",
        "birthday" => "1983-08-20",
        "address" => "Nam Dinh",
        "anh" => "klaus.jpg"
    ),
    "4" => array("name" => "Tran Dang Khoa",
        "birthday" => "1983-08-20",
        "address" => "Ha Tay",
        "anh" => "klaus.jpg"
    ),
    "5" => array("name" => "Nguyen Dinh Thi",
        "birthday" => "1983-08-20",
        "address" => "ha noi",
        "anh" => "klaus.jpg"
    )
);
function searchBirthdayCustom($customList, $from, $to)
{
    if (empty($from) && empty($to)) {
        return $customList;
    } else {
        $filterCustom = [];
        foreach ($customList as $key) {
            if (strtotime($from) <= strtotime($key['birthday']) && strtotime($to) >= strtotime($key['birthday'])) {
                $filterCustom[] = $key;
            }
        }
        return $filterCustom;
    }
}
$filterCustom = searchBirthdayCustom($customList, $_POST['from'], $_POST["to"]);
?>
<form method="post">
    From:<input name="from" type="text">
    To:<input name="to" type="text">
    <input type="submit" value="submit">
</form>
<table>
    <tr>
        <th>ten</th>
        <th>ngay sinh</th>
        <th>dia chi</th>
        <th>anh</th>
    </tr>
    <?php
    foreach ($filterCustom as $key => $value) {
        ?>
        <tr>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['birthday'] ?></td>
            <td><?php echo $value['address'] ?></td>
            <td><?php echo "<img src=" . $value['anh'] . ">" ?></td>
        </tr>
        <?php
    }
    ?>
</table>


</body>
</html>
