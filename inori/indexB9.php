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

    $thueNop = $income*0.05;

    } elseif ($income <= 20000000) {
    
        $thueNop = $income*0.1;
    
    } else {
    
        $thueNop = $income*0.2;

    }
    $thuNhapRong = $income - $thueNop;

    //In kết quả
    echo "Thuế phải nộp là: $thueNop" . "VND". "<br>";
    echo "Thu nhập ròng là: $thuNhapRong" . "VND";
    ?>
</body>
</html>