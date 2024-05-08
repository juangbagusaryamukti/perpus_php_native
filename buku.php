<?php include "header.php"; ?>

<div class="wrapper">
    <div class="container mt-4">
        <h2>Daftar Buku</h2>
        <div class="row">
            <?php
            include "koneksi.php";
            $qry_buku = mysqli_query($conn, "SELECT * FROM buku");
            while ($dt_buku = mysqli_fetch_array($qry_buku)) {
            ?>
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="assets/foto_buku/<?= $dt_buku['foto_buku'] ?>" class="card-img-top book-image" alt="<?= $dt_buku['nama_buku'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $dt_buku['nama_buku'] ?></h5>
                            <p class="card-text"><?= substr($dt_buku['deskripsi'], 0, 50) ?></p>
                            <a href="pinjam_buku.php?id_buku=<?= $dt_buku['id_buku'] ?>" class="btn btn-primary">Pinjam</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <?php include "footer.php"; ?>
</div>

<style>
    .book-image {
        height: 250px;
        object-fit: cover;
    }

    .card {
        border: 1px solid #dee2e6;
        border-radius: 8px;
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
    }

    .card-text {
        font-size: 14px;
    }

    footer.footer {
        background-color: #343a40;
        color: #fff;
        text-align: center;
        padding: 20px 0;
    }

    .wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .container {
        flex: 1;
    }
</style>