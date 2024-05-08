<?php
include "header.php";
include "koneksi.php";

$id_buku = isset($_GET['id_buku']) ? $_GET['id_buku'] : null;

if (!$id_buku) {
    echo "ID Buku tidak valid";
    exit;
}

$qry_detail_buku = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku = '$id_buku'");
$dt_buku = mysqli_fetch_array($qry_detail_buku);

if (!$dt_buku) {
    echo "Buku tidak ditemukan";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjam Buku - Perpustakaan XYZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            padding-top: 60px;
        }

        .book-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .book-image {
            text-align: center;
            margin-bottom: 30px;
        }

        .book-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .book-info {
            padding-left: 20px;
        }

        .book-info h2 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .book-info p {
            font-size: 18px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: bold;
            color: #555;
        }

        .form-control {
            width: 150px;
            font-size: 16px;
        }

        .btn-pinjam {
            background-color: #28a745;
            color: #fff;
            padding: 12px 24px;
            font-size: 18px;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .btn-pinjam:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container book-container">
        <div class="row">
            <div class="col-md-6 book-image">
                <img src="assets/foto_buku/<?= $dt_buku['foto_buku'] ?>" class="img-fluid" alt="<?= $dt_buku['nama_buku'] ?>">
            </div>
            <div class="col-md-6 book-info">
                <h2><?= $dt_buku['nama_buku'] ?></h2>
                <p><?= $dt_buku['deskripsi'] ?></p>
                <form action="masukkankeranjang.php?id_buku=<?= $dt_buku['id_buku'] ?>" method="post">
                    <div class="form-group">
                        <label for="jumlahPinjam" class="form-label">Jumlah Pinjam</label>
                        <input type="number" name="jumlah_pinjam" value="1" min="1" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-pinjam"><i class="fas fa-shopping-cart me-2"></i> PINJAM</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>