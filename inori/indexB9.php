<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Thu nhập: 
    $income = 15000000;//15 Triệu
    /*Thuế suất:
    5% nếu thu nhập ≤ 10 triệu
    10% nếu thu nhập > 10 triệu và ≤ 20 triệu
    20% nếu thu nhập > 20 triệu*/ 

    //Điều kiện
    if ($income <= 10000000) {

    $Thuenop = $income*0.05;

    } elseif ( $income > 10000000 && $income <= 20000000) {
    
        $Thuenop = $income*0.1;
    
    } else {
    
        $Thuenop = $income*0.2;

    }
    $Thunhaprong = $income - $Thuenop;

    //In kết quả
    echo "Thuế phải nộp là: $Thuenop" . "VND". "<br>";
    echo "Thu nhập ròng là: $Thunhaprong" . "VND";
    ?>
</body>
</html>