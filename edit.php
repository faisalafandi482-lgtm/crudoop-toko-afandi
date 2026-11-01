<?php
include 'databse.php';
$db = new Database();

$id = $_GET['id'];
$data = $db->get_by_id($id);

if(isset($_POST['update'])){
    $db->update_data($id, $_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual']);
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Barang</title>
</head>
<body>
    <h2>Edit Data Barang</h2>
    <a href="index.php">Kembali</a>
    <br><br>
    <form method="post" action="">
        <table>
            <tr>
                <td>ID Barang</td>
                <td><input type="number" value="<?php echo $data['id barang']; ?>" readonly style="background-color: #eee;"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" value="<?php echo $data['nama barang']; ?>" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" value="<?php echo $data['stok']; ?>" required></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="number" name="harga_beli" value="<?php echo $data['harga beli']; ?>" required></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="number" name="harga_jual" value="<?php echo $data['harga jual']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="Update Data"></td>
            </tr>
        </table>
    </form>
</body>
</html>