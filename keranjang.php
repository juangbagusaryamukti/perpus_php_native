<?php
include "header.php";
?>

<div class="container mt-4">
    <h2>Daftar Buku di Keranjang</h2>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 16px;
            color: #333;
        }

        table th,
        table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #007bff;
            color: #000;
        }

        table tr:hover {
            background-color: #f5f5f5;
        }

        .btn-action {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .btn-checkout {
            background-color: #007bff;
            color: #fff;
            padding: 14px 24px;
        }

        .btn-checkout:hover {
            background-color: #0056b3;
        }
    </style>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['cart'] as $key_produk => $val_produk) : ?>
                <tr>
                    <td><?= $key_produk + 1 ?></td>
                    <td><?= $val_produk['nama_buku'] ?></td>
                    <td><?= $val_produk['qty'] ?></td>
                    <td>
                        <a href="hapus_cart.php?id=<?= $key_produk ?>" class="btn btn-action btn-delete"><strong>X</strong></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="checkout.php" class="btn btn-action btn-checkout">Check Out</a>
</div>