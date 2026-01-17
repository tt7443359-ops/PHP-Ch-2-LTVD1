<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 5;
    $b = 2;
    //Sử dụng  biến $hoan để hoán đổi
    $hoan = $a;
    $a = $b;
    $b = $hoan;
    echo "Sau khi hoán đổi: a = [$a], b = [$b]";
    ?>
</body>
</html>