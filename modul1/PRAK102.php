<?php
    $jari = 4.2; $tinggi = 5.4; $panjang = 8.9; $lebar = 14.7; $sisi = 7.9; 
    $Kerucut = 1/3*pi()*$jari*$jari*$tinggi;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK102</title>
</head>
<body>
    <?php
    echo (round($Kerucut,3))." m3"
    ?>
</body>
</html>