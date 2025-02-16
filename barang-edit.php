<?php 
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "GET"){
    $id = $_GET['id'];
    $sql = "SELECT * FROM barang WHERE id=?";
    $row = $koneksi->execute_query($sql, [$id])->fetch_assoc();
} else if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nama = $_POST["nama"];
    $stok = $_POST["stok"];
    $status = $_POST["status"];
    $id = $_GET["id"];
}

//$sql = "INSERT INTO barang (nama, stok, status) values (?, ?, ?)";

$sql = "UPDATE barang SET nama=?, stok=?, status=?, WHERE id=?";
$row = $koneksi->execute_query($sql, [$nama, $stok, $status, $id]);
header("location:barang.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit barang</title>
</head>
<body>
    <h1 style="font-size: larger;">Edit Barang</h1>
    <form action="" method="post">
        <div class="form-item">
            <label for="nama">Nama Barang</label>
            <input type="text" name="nama" id="nama" value="<?=$row['nama']?>">
        </div>
        <div class="form-item">
            <label for="nama">Nama Barang</label>
            <input type="number" name="stok" id="stok" value="<?=$row['stok']?>">
        </div>
        <div class="form-item">
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="baik" <?=($row['status'] === 'baik')?'selected':''?> >Baik</option>
                <option value="rusak" <?=($row['status'] === 'rusak')?'selected':''?> >Rusak</option>
            </select>
        </div>
        <button type="submit">Submit</button>
    </form>
    <a href="barang.php">Kembali</a>
</body>
</html>