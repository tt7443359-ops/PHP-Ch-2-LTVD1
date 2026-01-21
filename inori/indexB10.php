<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $weight = 70; //(kg)
    $height = 1.75; //(m)
    //Xử lí dữ liệu
    $BMI = $weight/($height*$height);
    /*
    BMI < 18,5: Thiếu cân
    18,5 ≤ BMI < 24,9: Bình thường
    25 ≤ BMI < 29,9: Thừa cân
    ≥ 30: Béo phì*/

    //Lọc Điều kiện
      if ($BMI < 18.5) {
        $result = "Thiếu cân";

    } elseif ($BMI <= 24.9) {
        $result = "Bình thường";

    } elseif ($BMI <=29.9) {
        $result = "Thừa cân";

    } else {
        $result = "Béo phì";

    }
    //Dữ liệu đầu ra
    echo "BMI:" . round($BMI,2) . "<br>" ;
    echo "Phân loại:" .$result;
    
    ?>
</body>
</html>