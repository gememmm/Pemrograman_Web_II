<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK201</title>
</head>
<body>
    <form action="" method="POST">
        Nama: 1 <input type="text" name="nama1" value="<?php echo isset($_POST['nama1']) ? htmlspecialchars($_POST['nama1']) : ''; ?>"><br>
        Nama: 2 <input type="text" name="nama2" value="<?php echo isset($_POST['nama2']) ? htmlspecialchars($_POST['nama2']) : ''; ?>"><br>
        Nama: 3 <input type="text" name="nama3" value="<?php echo isset($_POST['nama3']) ? htmlspecialchars($_POST['nama3']) : ''; ?>"><br>
        <button type="submit" name="submit">Urutkan</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $nama1 = $_POST["nama1"];
        $nama2 = $_POST["nama2"];
        $nama3 = $_POST["nama3"];
        if ($nama1 < $nama2 && $nama1 < $nama3) {
            echo $nama1, "<br>";
            if ($nama2 < $nama3) {
                echo $nama2, "<br>";
                echo $nama3, "<br>";
            } else if ($nama2 > $nama3) {
                echo $nama3, "<br>";
                echo $nama2, "<br>";
            }
        }
        if ($nama2 < $nama1 && $nama2 < $nama3) {
            echo $nama2, "<br>";
            if ($nama1 < $nama3) {
                echo $nama1, "<br>";
                echo $nama3, "<br>";
            } else if ($nama1 > $nama3) {
                echo $nama3, "<br>";
                echo $nama1, "<br>";
            }
        } else if ($nama3 < $nama1 && $nama3 < $nama2) {
            echo $nama3, "<br>";
            if ($nama1 < $nama2) {
                echo $nama1, "<br>";
                echo $nama2, "<br>";
            } else if ($nama1 > $nama2) {
                echo $nama2, "<br>";
                echo $nama1, "<br>";
            }
        }
    }
    ?>
</body>
</html>