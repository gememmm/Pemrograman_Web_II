<?php
    $sams = array("S22"=>"Samsung Galaxy S22","S22P"=>"Samsung Galaxy S22+","A03"=>"Samsung Galaxy A03","XC5"=>"Samsung Galaxy Xcover 5");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK105</title>
    <style>
    th{
        font-size: 24px;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    </style>
</head>
<body>
    <table border="1">
        <tr bgcolor="red">
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <td><?php echo $sams["S22"] ?></td>
        </tr>
        <tr>
            <td><?php echo $sams["S22P"] ?></td>
        </tr>
        <tr>
            <td><?php echo $sams["A03"] ?></td>
        </tr>
        <tr>
            <td><?php echo $sams["XC5"] ?></td>
        </tr>
    </table>
</body>
</html>