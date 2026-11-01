<?php
include 'databse.php';
$db = new Database();

if(isset($_POST['simpan'])){
    $db->tambah_data($_POST['id_barang'], $_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual']);
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Barang</title>
</head>
<body>
    <h2>Tambah Data Barang</h2>
    <a href="index.php">Kembali</a>
    <br><br>
    <form method="post" action="">
        <table>
            <tr>
                <td>ID Barang</td>
                <td><input type="number" name="id_barang" required placeholder="Masukkan ID (angka)"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" required></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="number" name="harga_beli" required></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="number" name="harga_jual" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan Data"></td>
            </tr>
        </table>
    </form>
</body>
</html>