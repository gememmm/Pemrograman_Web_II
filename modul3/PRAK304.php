<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $star = $_POST["star"];
    }
    if (isset($_POST["tambah"])) {
        $star += 1;
    }
    if (isset($_POST["kurang"])) {
        $star -= 1;
    }
    ?>
    <?php if (empty($star)) : ?>
        <form action="" method="POST">
            Jumlah bintang : <input type="text" name="star">
            <button type="submit" name="submit">Submit</button>
        </form>
    <?php
    endif;
    if (!empty($star)) :
        echo "Jumlah bintang $star <br>";
        $a = 1;
        while ($a <= $star) {
            echo " <img src='star.png' width='50' height='50'/> ";
            $a++;
        }
    ?>
        <form action="" method="POST">
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
            <input type="text" name="star" value="<?= $star ?>" hidden>
        <?php
    endif;
        ?>
</body>
</html>