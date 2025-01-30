<?php 

require 'koneksi.php';

$sql = "SELECT username FROM user";
$rows = $koneksi ->execute_query($sql)-> fetch_all(MYSQLI_ASSOC);
$no = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>Data User</h1>
    <a href="user-tambah.php">Tambah</a>
    <table>
        <thead>
            <th>No</th>
            <th>Username</th>
        </thead>
    </table>
    <?php 
    foreach ($rows as $row) {


    ?>
    <tr>
        <td><?=++$no?></td>
        <td><?=$row['username']?></td>
    </tr>
    <?php
    }
    ?>
</body>
</html>