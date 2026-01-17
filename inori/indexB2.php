<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Giá trị 
    $a = 10;
    $b = 5;
    //Xử lí phép tính
    $tong = $a + $b;
    $hieu = $a - $b;
    $tich = $a * $b;
    $thuong = $a / $b;
    $du = $a % $b;
    //In giá trị đầu ra của phép tính
    echo "Tổng 2 số $a và $b là: $tong <br>";
    echo "Hiệu 2 số $a và $b là: $hieu <br>";
    echo "Tích 2 số $a và $b là: $tich <br>";
    echo "Thương 2 số $a và $b là: $thuong <br>";
    echo "Số dư của của phép chia trên là: $du";
    ?>
</body>
</html>