<?php
if ($_POST) {
    $nama_buku = $_POST['nama_buku'];
    $deskripsi = $_POST['deskripsi'];
    $foto_buku = $_FILES['foto_buku']['name'];
    if (empty($nama_buku)) {
        echo "<script>alert('nama buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    }
    include "koneksi.php";
    $target_dir = "assets/foto_buku/";
    $target_file = $target_dir . basename($_FILES["foto_buku"]["name"]);
    if (move_uploaded_file($_FILES["foto_buku"]["tmp_name"], $target_file)) {
        $insert = mysqli_query($conn, "insert into buku (nama_buku, deskripsi,foto_buku) value ('" . $nama_buku . "','" . $deskripsi . "','" . $foto_buku . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan buku');location.href='tampil_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan buku');location.href='tambah_buku.php';</script>";
        }
    }
}
