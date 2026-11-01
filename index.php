<?php
include 'databse.php';
$db = new Database();
$data_barang = $db->tampil_data();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang - Toko Afandi</title>
</head>
<body>
    <h2>Data Barang - Toko Afandi 5026</h2>
    <a href="tambah.php"><button>+ Tambah Data</button></a>
    <br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach($data_barang as $row){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['id barang']; ?></td>
            <td><?php echo $row['nama barang']; ?></td>
            <td><?php echo $row['stok']; ?></td>
            <td>Rp <?php echo number_format($row['harga beli'], 0, ',', '.'); ?></td>
            <td>Rp <?php echo number_format($row['harga jual'], 0, ',', '.'); ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id barang']; ?>">Edit</a> |
                <a href="hapus.php?id=<?php echo $row['id barang']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>