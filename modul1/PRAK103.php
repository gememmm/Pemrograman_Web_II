<?php
    $celc = 37.841;
    $fahre = (($celc*9)/5)+32 ;
    $kelv = $celc + 273.15;
    $reamr = $celc * (4/5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK103</title>
</head>
<body>
    <?php
    echo "Fahrenheit (F) = $fahre <br>";
    echo "Reamur (R) = $reamr <br>";
    echo "Kelvin (K) = ".(round($kelv,4));
    ?>
</body>
</html>