<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
</head>
<body>
    <form action="" method="POST">
        Jumlah Peserta : <input type="text" name="jumlahPeserta">
        <button type="submit" name="submit">Cetak</button>
    </form>
    <?php
    if(isset($_POST["submit"])){
        $jp = $_POST["jumlahPeserta"];
        $i = 1;
            while ($i <= $jp){
                if($i % 2 == 0){
                    echo "<h2 style='color:red'> Peserta ke-$i </h2>";
                } else {
                    echo "<h2 style='color:green'> Peserta ke-$i </h2>";
                }
                $i++;
    }}
    ?>
</body>
</html>