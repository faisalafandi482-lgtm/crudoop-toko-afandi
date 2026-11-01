# Aplikasi CRUD Berbasis OOP - Sistem Penjualan Online Sederhana (Toko Afandi)

## 📌 Judul dan Informasi Mahasiswa
* Nama: Afandi Faisal Hikam
* NIM: 42425026
* prodi: Informatika 3 (Semester 3)
* Tema Aplikasi: Sistem Penjualan Online Sederhana (Toko Afandi 5026)

---

## 📝 Deskripsi Ringkas Aplikasi
Aplikasi berbasis web ini dikembangkan untuk memenuhi Ujian Tengah Semester (UTS) mata kuliah Pemrograman Berorientasi Objek (PBO). Aplikasi ini berfungsi untuk mengelola inventaris data barang pada toko secara efisien menggunakan operasi CRUD (*Create, Read, Update, Delete*) berbasis paradigma OOP di PHP.

---

## ⚙️ Penerapan Konsep OOP
* Class & Object:Mendefinisikan *class* (`KoneksiDB`, `Database`) dan menginisialisasikannya menjadi objek (`$db = new Database()`)
* Encapsulation: Membatasi akses data kredensial database menggunakan modifier `protected` di dalam *parent class*
* Inheritance: Kelas `Database` mewarisi (*extends*) fungsi koneksi dari *parent class* `KoneksiDB`
* Polymorphism: Menerapkan *interface* `AksiInterface` sebagai kontrak method `tampil_data()` pada kelas turunan

---

## 🚀 Alur & Fitur Utama Program
* Index / Read: Menampilkan seluruh daftar barang yang tersimpan di database
* Tambah Data: Menyediakan form input untuk menambahkan data barang baru
* Edit Data: Memperbarui data barang yang sudah ada berdasarkan ID
* Hapus Data:Menghapus data barang dari database

---

## 💻 Cara Menjalankan Program (How to Run)
1. Nyalakan server **Apache** dan **MySQL** di XAMPP Control Panel
2. Buat database baru bernama **`toko afandi 5026`** di phpMyAdmin, lalu *import* file SQL proyek ini
3. Letakkan folder project ke dalam direktori `htdocs` (contoh: `C:\xampp\htdocs\crudoop_afandi`)
4. Buka browser dan akses URL: `http://localhost/crudoop_afandi/index.php`