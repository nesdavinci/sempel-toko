<!DOCTYPE html>
<html>

<head>
    <title>New Penjualan</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    ?>

    <?php
    require "koneksi.php";

    $sql = "SELECT * FROM penjualan";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div>
        <form action="create-penjualan.php" method="POST">
            <h1>Tambah Penjualan</h1>
            <table>
                <tr>
                    <td>penjualan</td>
                    <td>
                        <select name="id_penjualan">
                            <?php while ($penjualan = mysqli_fetch_array($query)) : ?>
                                <option value='<?= $penjualan["id"] ?>'>
                                    <?= $penjualan["nama"] ?>, harga: <?= $penjualan["harga"] ?>, stok: <?= $penjualan["stok"] ?>
                                </option>
                            <?php endwhile ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><input type="number" min="0" name="jumlah"></td>
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