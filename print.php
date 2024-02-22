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
        <form action="new-barang.php" method="GET">
            <button type="submit">Tambah</button>
        </form>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga jual</th>
                <th>Dibuat pada</th>
                <th>Diubah pada</th>
                <th colspan="2">Edit</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($barang = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $barang["nama"] ?></td>
                    <td><?= $barang["kategori"] ?></td>
                    <td><?= $barang["stok"] ?></td>
                    <td><?= $barang["harga_jual"] ?></td>
                    <td><?= $barang["created_at"] ?></td>
                    <td><?= $barang["updated_at"] ?></td>
                    <td>
                        <form action="read-barang.php" method="GET">
                            <input type="hidden" name="id" value='<?= $barang["id"] ?>'>
                            <button type="submit">Lihat</button>
                        </form>
                    </td>
                    <td>
                        <form action="delete-barang.php" method="POST" onsubmit="return konfirmasi(this)">
                            <input type="hidden" name="id" value='<?= $barang["id"] ?>'>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>
        </table>
        <script type="text/javascript">
            window.print();
    </div>
    <script>
        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus barang '${id}'?`);
        }
    </script>
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
        background-color: #e7d7c9;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #d4b2a7;
    }


    th,
    td {
        border-color: #d4b2a7;
    }
</style>

</html>