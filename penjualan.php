<!DOCTYPE html>
<html>

<head>
    <title>Penjualan</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $sql = "SELECT penjualan.id, barang.nama as nama_barang, penjualan.jumlah, penjualan.total_harga, user.username, penjualan.created_at FROM barang JOIN penjualan on barang.id = penjualan.id_barang JOIN user ON user.id = penjualan.id_staff ORDER BY penjualan.created_at DESC";
    $query = mysqli_query($koneksi, $sql);

    if (!$query) {
        die('Error: ' . mysqli_error($koneksi));
    }

    ?>

    <div>
        <h1>Data Penjualan</h1>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Diinput tanggal</th>
                <th>Waktu</th>
                <th colspan="2">Edit</th>
            </tr>
            <?php $i = 1; ?>
            <?php while ($penjualan = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $penjualan["nama_barang"] ?></td>
                    <td><?= $penjualan["jumlah"] ?></td>
                    <td><?= $penjualan["total_harga"] ?></td>
                    <td><?= $penjualan["username"] ?></td>
                    <td><?= $penjualan["created_at"] ?></td>
                    <td>
                        <form action="read-penjualan.php" method="GET">
                            <input type="hidden" name="id" value='<?= $penjualan["id"] ?>'>
                            <button class="button" type="submit">Lihat</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>
        </table>
    </div>
    <script>
        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus penjualan '${id}'?`);
        }

        function cetaklaporan() {
            window.print();
        }
    </script>
    <form action="new-barang.php" method="GET">
        <button class="left-button" type="sumbit">Tambah</button>
    </form>
    <button class="right-button" onclick="cetaklaporan()">Cetak</button>
    <?php include "footer.php"; ?>
</body>

<style>
    table {
        margin: 0 auto;
        width: 50%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #d4b2a7;
    }

    tr:nth-child(even) {
        background-color: #d4b2a7;
    }

    tr:hover {
        background-color: #e7d7c9;
    }

    th,
    td {
        border-color: #e7d7c9;
    }

    h1 {
        text-align: center;
    }

    .button {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #a38f85;
        padding: 7px 20px;
        outline: none;
        color: black;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
    }

    .left-button {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #a38f85;
        padding: 14px 40px;
        outline: none;
        color: black;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
    }

    .right-button {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #a38f85;
        padding: 14px 40px;
        outline: none;
        color: black;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
    }
</style>

</html>