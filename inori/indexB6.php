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
    $tong = $a + $b + $c;
    $hieu = $a - $b - $c;
    $tich = $a * $b * $c;
    $thuong = $a /$b /$c;
    //Giá trị đầu ra
    echo " Tổng: $tong <br>" , "Hiệu: $hieu <br>" , "Tích: $tich <br>";
    echo " Thương: ". round($thuong,6) . "...";
    ?>
</body>
</html>