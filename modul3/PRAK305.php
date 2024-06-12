<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="kata">
        <button type="text" name="submit">Submit</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $kata = $_POST["kata"];
        $panjang = strlen($kata);
        $a = 0;
        while ($a < $panjang) {
            $b = $panjang;
            while ($b > 0) {
                if ($b == $panjang) {
                    echo strtoupper($kata[$a]);
                } else {
                    echo strtolower($kata[$a]);
                }
                $b--;
            }
            $a++;
        }
    }
    ?>
</body>
</html>