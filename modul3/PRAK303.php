<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
</head>
<body>
    <form action="" method="POST">
        Batas Bawah : <input type="text" name="batas_bawah"><br>
        Batas Atas : <input type="text" name="batas_atas"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $bawah = $_POST["batas_bawah"];
        $atas = $_POST["batas_atas"];
        do {
            if (($bawah + 7) % 5 == 0) {
                echo " <img src='star.png' width='20' height='20'/> ";
            } else {
                echo " $bawah ";
            }
            $bawah++;
        } while ($bawah <= $atas);
    }
?>
</body>
</html>