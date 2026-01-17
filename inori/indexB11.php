<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sodien = 120;//(kwh)
    /*0 - 50 kWh đầu tiên: 1,678 VNĐ/kWh
    51 - 100 kWh tiếp theo: 1,734 VNĐ/kWh
    Trên 100 kWh: 2,014 VNĐ/kWh*/
    if($sodien <= 50){
        $Tongsotientra = $sodien*1678;
    }
    elseif($sodien >=51 && $sodien <= 100){
        $Tongsotientra = (50*1678) + (($sodien - 50)*1734) ;
    }
     else{
        $Tongsotientra = (50*1678) + (50*1734) + (($sodien - 100)*2014);
    }
    echo "Số điện tiêu thụ: $sodien" . "<br>";
    echo "Tổng số tiền phải trả là: $Tongsotientra" . "VND";
    ?>
</body>
</html>