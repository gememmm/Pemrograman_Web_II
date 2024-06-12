<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
</head>
<body>
    <form action="" method="POST">
        Tinggi : <input type="text" name="tinggi"><br>
        Alamat Gambar : <input type="text" name="address_img"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $tinggi = $_POST["tinggi"];
        $address_img = $_POST["address_img"];

        $i = 1;
        while ($i <= $tinggi) {
            $j = $tinggi;
            while ($j >= $i) {
                echo "<img src='$address_img' width='20' height='20'/>";
                $j--;
            }
            echo '<br>';
            $i++;
            $k = 1;
            while ($k < $i) {
                echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;";
                $k++;
            }
        }
    }
    ?>
</body>
</html>