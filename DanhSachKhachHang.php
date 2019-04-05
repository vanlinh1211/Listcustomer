<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 2px solid lightslategray;
    }
</style>
<body>
<table border="0">
    <caption><h1>Danh Sách Khách Hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>BirthDay</th>
        <th>Adress</th>
        <th>Picture</th>
    </tr>

    <?php
    $cutormerlist = array(
        "1" => array("ten" => "Hà Thị Hoa",
            "ngaysinh" => "1996-29-03",
            "diachi" => "Hải Dương",
            "anh" => "hahoa.jpg"),
        "2" => array("ten" => "Đặng Thị Hoa",
            "ngaysinh" => "1997-22-02",
            "diachi" => "Hà Nội",
            "anh" => ".jpg")
    );
    foreach ($cutormerlist as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values['ten'] . "</td>";
        echo "<td>" . $values['ngaysinh'] . "</td>";
        echo "<td>" . $values['diachi'] . "</td>";
        echo "<td><image src ='" . $values["anh"] . "' width = '100px' height ='100px'/></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
