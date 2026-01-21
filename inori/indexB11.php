<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $soDien = 120;//(kwh)
    /*0 - 50 kWh đầu tiên: 1,678 VNĐ/kWh
    51 - 100 kWh tiếp theo: 1,734 VNĐ/kWh
    Trên 100 kWh: 2,014 VNĐ/kWh*/
    if($sodien <= 50){
        $tongSoTienTra = $soDien*1678;
    }
    elseif($soDien <= 100){
        $tongSoTienTra = (50*1678) + (($soDien - 50)*1734) ;
    }
     else{
        $tongSoTienTra = (50*1678) + (50*1734) + (($soDien - 100)*2014);
    }
    echo "Số điện tiêu thụ: $soDien" . "<br>";
    echo "Tổng số tiền phải trả là: $tongSoTienTra" . "VND";
    ?>
</body>
</html>