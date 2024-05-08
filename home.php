<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }

        .footer {
            flex-shrink: 0;
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php include "header.php"; ?>

        <div class="container mt-2 content">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="display-4 mb-4 fw-bold">Selamat datang, <?= $_SESSION['nama_siswa'] ?>!</h2>
                    <p class="lead mb-4 fw-bold">Terima kasih telah menggunakan layanan perpustakaan online kami. Di sini Anda dapat menemukan berbagai koleksi buku terbaru dan melakukan transaksi peminjaman dengan mudah.</p>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Daftar Buku</h5>
                                    <p class="card-text">Jelajahi daftar lengkap buku-buku yang tersedia di perpustakaan kami.</p>
                                    <a href="buku.php" class="btn btn-primary"><i class="fas fa-book-open"></i> Lihat Buku</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Riwayat Peminjaman</h5>
                                    <p class="card-text">Pantau riwayat peminjaman buku Anda dan detail transaksi.</p>
                                    <a href="history_peminjaman.php" class="btn btn-primary"><i class="fas fa-history"></i> Lihat Riwayat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>