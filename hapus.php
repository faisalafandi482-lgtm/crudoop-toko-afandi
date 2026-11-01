<?php
include 'databse.php';
$db = new Database();

$id = $_GET['id'];
// Langsung panggil method hapus_data tanpa menggunakan ->hap_data
$db->hapus_data($id); 

header("location:index.php");
?>