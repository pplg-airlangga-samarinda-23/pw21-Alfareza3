<?php 
require "koneksi.php";

$sql = "SELECT * FROM barang";

$rows =$koneksi->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
</head>
<body>
    <a href="barang-tambah.php">Tambah</a>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            while ($item = $rows->fetch_assoc()){

            ?>

            <tr>
                <td><?= $no; ?></td>
                <td><?= $item["nama"]; ?></td>
                <td><?= $item["stok"]; ?></td>
                <td><?= $item["status"]; ?></td>
                <td>
                    <a href="barang-edit.php">Edit</a>
                    <a href="barang-hapus.php">Hapus</a>
                </td>
            </tr>

            <?php 
            $no += 1;
            }
            ?>
        </tbody>
    </table>
</body>
</html>