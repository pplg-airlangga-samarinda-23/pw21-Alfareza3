<?php 
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" ){
    $nama = $_POST["nama"];
    $stok = $_POST["stok"];
    $status = $_POST["status"];

    $sql = "INSERT INTO barang (nama, stok, status) values (?, ?, ?)";

    header("location:barang.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang Tambah</title>
</head>
<body>
    <h1 style="font-size: large;">Tambah Barang</h1>
    <form action="" method="post">
        <div class="form-item"></div>
    </form>
</body>
</html>