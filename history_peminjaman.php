<?php include "header.php"; ?>

<div class="container mt-4">
    <h2 class="mb-4">Histori Peminjaman Buku</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Harus Kembali</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_histori = mysqli_query($conn, "SELECT * FROM peminjaman_buku ORDER BY id_peminjaman_buku DESC");
                $no = 0;
                while ($dt_histori = mysqli_fetch_array($qry_histori)) {
                    $no++;
                    $qry_buku = mysqli_query($conn, "SELECT * FROM detail_peminjaman_buku JOIN buku ON buku.id_buku=detail_peminjaman_buku.id_buku WHERE id_peminjaman_buku = '" . $dt_histori['id_peminjaman_buku'] . "'");
                    $buku_dipinjam = [];
                    while ($dt_buku = mysqli_fetch_array($qry_buku)) {
                        $buku_dipinjam[] = $dt_buku['nama_buku'];
                    }

                    $status_kembali = '<span class="badge bg-danger">Belum kembali</span>';
                    $button_kembali = '<a href="kembali.php?id=' . $dt_histori['id_peminjaman_buku'] . '" class="btn btn-warning btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin mengembalikan?\')">Kembalikan</a>';

                    $qry_cek_kembali = mysqli_query($conn, "SELECT * FROM pengembalian_buku WHERE id_peminjaman_buku = '" . $dt_histori['id_peminjaman_buku'] . "'");
                    if (mysqli_num_rows($qry_cek_kembali) > 0) {
                        $dt_kembali = mysqli_fetch_array($qry_cek_kembali);
                        $denda = 'Denda: Rp. ' . $dt_kembali['denda'];
                        $status_kembali = '<span class="badge bg-success">Sudah kembali<br>' . $denda . '</span>';
                        $button_kembali = '<span class="text-success">Sudah dikembalikan</span>';
                    }
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $dt_histori['tanggal_pinjam'] ?></td>
                        <td><?= $dt_histori['tanggal_kembali'] ?></td>
                        <td>
                            <?php foreach ($buku_dipinjam as $buku) : ?>
                                <?= $buku ?><br>
                            <?php endforeach; ?>
                        </td>
                        <td><?= $status_kembali ?></td>
                        <td><?= $button_kembali ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "footer.php"; ?>

<style>
    h2 {
        margin-bottom: 20px;
    }
</style>