<!DOCTYPE html>
<html>

<head>
    <title>Barang</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php


    require "koneksi.php";


    $sql = "SELECT * FROM barang";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div>
        <h1>Data Barang</h1>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Dibuat tanggal</th>
                <th>Diubah tanggal</th>
                <th colspan="2">Edit</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($barang = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $barang["nama"] ?></td>
                    <td><?= $barang["kategori"] ?></td>
                    <td><?= $barang["stok"] ?></td>
                    <td><?= $barang["harga"] ?></td>
                    <td><?= $barang["created_at"] ?></td>
                    <td><?= $barang["updated_at"] ?></td>
                    <td>
                        <form action="read-barang.php" method="GET">
                            <input type="hidden" name="id" value='<?= $barang["id"] ?>'>
                            <button class="button" type="submit">Lihat</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>
        </table>
        <form action="new-barang.php" method="GET">
            <button class="left-button" type="submit">Tambah</button>
        </form>
        <button class="right-button" onclick="cetaklaporan()">Cetak</button>
    </div>
    <script>
        function cetaklaporan() {
            window.print();
        }

        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus barang '${id}'?`);
        }
    </script>
</body>
<style>
    body {
        background-color: #d4b2a7;
    }
    
    table {
        margin: 0 auto;
        width: 50%;
        border-collapse: collapse;
        background-color:  #e7d7c9;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #e7d7c9;
    }

    tr:nth-child(even) {
        background-color: #e7d7c9;
    }

    tr:hover {
        background-color: #d4b2a7;
    }

    th,
    td {
        border-color: #d4b2a7;
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