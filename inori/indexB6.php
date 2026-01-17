<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 20;
    $c = 30;
    //Xử lí phép tính
    $Tong = $a + $b + $c;
    $Hieu = $a - $b - $c;
    $Tich = $a * $b * $c;
    $Thuong = $a /$b /$c;
    //Giá trị đầu ra
    echo " Tổng: $Tong <br>" , "Hiệu: $Hieu <br>" , "Tích: $Tich <br>";
    echo " Thương: ". round($Thuong,6) . "...";
    ?>
</body>
</html>