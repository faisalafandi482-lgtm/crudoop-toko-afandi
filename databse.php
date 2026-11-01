<?php
// 1. Parent Class (Menerapkan Encapsulation untuk kredensial database)
class KoneksiDB {
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $db = "toko afandi 5026";
    public $koneksi;

    public function __construct() {
        $this->koneksi = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->koneksi->connect_error) {
            die("Koneksi gagal: " . $this->koneksi->connect_error);
        }
    }
}

// 2. Interface (Menerapkan bentuk Polymorphism/kontrak method)
interface AksiInterface {
    public function tampil_data();
}

// 3. Child Class (Menerapkan Inheritance/Pewarisan dari KoneksiDB dan Polymorphism dari AksiInterface)
class Database extends KoneksiDB implements AksiInterface {

    // Polymorphism: Implementasi method dari interface
    public function tampil_data() {
        $data = [];
        $query = mysqli_query($this->koneksi, "SELECT * FROM `tabel id barang`");
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        return $data;
    }

    public function tambah_data($id_barang, $nama_barang, $stok, $harga_beli, $harga_jual) {
        $query = "INSERT INTO `tabel id barang` (`id barang`, `nama barang`, `stok`, `harga beli`, `harga jual`) 
                  VALUES ('$id_barang', '$nama_barang', '$stok', '$harga_beli', '$harga_jual')";
        return mysqli_query($this->koneksi, $query);
    }

    public function get_by_id($id_barang) {
        $query = mysqli_query($this->koneksi, "SELECT * FROM `tabel id barang` WHERE `id barang`='$id_barang'");
        return mysqli_fetch_assoc($query);
    }

    public function update_data($id_barang, $nama_barang, $stok, $harga_beli, $harga_jual) {
        $query = "UPDATE `tabel id barang` SET 
                  `nama barang`='$nama_barang', 
                  `stok`='$stok', 
                  `harga beli`='$harga_beli', 
                  `harga jual`='$harga_jual' 
                  WHERE `id barang`='$id_barang'";
        return mysqli_query($this->koneksi, $query);
    }

    public function hapus_data($id_barang) {
        $query = "DELETE FROM `tabel id barang` WHERE `id barang`='$id_barang'";
        return mysqli_query($this->koneksi, $query);
    }
}
?>