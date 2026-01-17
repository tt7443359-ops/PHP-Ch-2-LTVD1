<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = 50; 
    $num2 = 30;
    //So sánh & In
    echo "$num1 > $num2:" . var_dump($num1 > $num2) . "<br>";
    echo "$num1 == $num2:" . var_dump($num1 == $num2) . "<br>";
    echo "$num1 != $num2:" . var_dump($num1 != $num2);
    ?>
</body>
</html>