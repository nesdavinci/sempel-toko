<!DOCTYPE html>
<html>

<head>
    <title>Pelanggan</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php


    require "koneksi.php";


    $sql = "SELECT * FROM pelanggan";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div>
        <h1>Data Pelanggan</h1>

        <table border="1">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Dibuat pada</th>
                <th>Diubah pada</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($pelanggan = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $pelanggan["nama"] ?></td>
                    <td><?= $pelanggan["alamat"] ?></td>
                    <td><?= $pelanggan["nomor_telepon"] ?></td>
                    <td><?= $pelanggan["created_at"] ?></td>
                    <td><?= $pelanggan["updad_at"] ?></td>
                    <td>
                        <form action="read-pelanggan.php" method="GET">
                            <input type="hidden" name="id" value='<?= $pelanggan["id"] ?>'>
                            <button class="button" type="submit">Lihat</button>
                        </form>
                    </td>
                    <td>
                        <form action="delete-pelanggan.php" method="POST" onsubmit="return konfirmasi(this)">
                            <input type="hidden" name="id" value='<?= $pelanggan["id"] ?>'>
                            <button class="button" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>
        </table>
    </div>
    <script>
        function cetaklaporan() {
            window.print();
        }
    </script>
    <script>
        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus pelanggan '${id}'?`);
        }
    </script>
    <form action="new-pelanggan.php" method="GET">
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