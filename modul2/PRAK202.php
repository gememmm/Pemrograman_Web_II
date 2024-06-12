<?php
$namaErr = $nimErr = $jkelaminErr = "";
$nama = $nim = $jkelamin = "";
if (isset($_POST["submit"])) {
    if (empty($_POST["nama"])) {
        $namaErr = "nama tidak boleh kosong";
    } else {
        $nama = $_POST["nama"];
    }

    if (empty($_POST["nim"])) {
        $nimErr = "nim tidak boleh kosong";
    } else {
        $nim = $_POST["nim"];
    }

    if (empty($_POST["jkelamin"])) {
        $jkelaminErr = "jenis kelamin tidak boleh kosong";
    } else {
        $jkelamin = $_POST["jkelamin"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Nama:
        <input type="text" name="nama">
        <span class="error">* <?php echo $namaErr; ?></span>
        <br>
        Nim:
        <input type="text" name="nim">
        <span class="error">* <?php echo $nimErr; ?></span>
        <br>
        Jenis Kelamin : <span class="error">* <?php echo $jkelaminErr; ?></span>
        <br>
        <input type="radio" name="jkelamin" value="Laki-laki" <?php if (isset($jkelamin) && $jkelamin == "Laki-laki") echo "checked"; ?>> Laki-laki<br>
        <input type="radio" name="jkelamin" value="Perempuan" <?php if (isset($jkelamin) && $jkelamin == "Perempuan") echo "checked"; ?>> Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
<?php
if (!empty($nama) && !empty($nim) && !empty($jkelamin)) {
    echo "$nama <br>";
    echo "$nim <br>";
    echo "$jkelamin <br>";
}
?>
</body>
</html>