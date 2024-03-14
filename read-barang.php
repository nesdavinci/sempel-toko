<!DOCTYPE html>
<html>

<head>
    <title>Read Barang</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM barang WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    $barang = mysqli_fetch_array($query);
    ?>

    <div>
        <form action="update-barang.php" method="POST">
            <h1>Lihat Barang</h1>

            
            <input type="hidden" name="id" value="<?= $id ?>">

            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?= $barang["nama"] ?>"></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>
                        <select name="kategori">
                            <option value="cincin" <?= $barang["kategori"] == "cincin" ? "selected" : "" ?>>cincin</option>
                            <option value="kalung" <?= $barang["kategori"] == "kalung" ? "selected" : "" ?>>kalung</option>
                            <option value="gelang" <?= $barang["kategori"] == "gelang" ? "selected" : "" ?>>gelang</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="number" name="stok" value="<?= $barang["stok"] ?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga" value="<?= $barang["harga"] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">SIMPAN</button>
                        <button type="reset">RESET</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>