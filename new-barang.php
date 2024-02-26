<!DOCTYPE html>
<html>

<head>
    <title>New Barang</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    
    ?>

    <div>
      
        <form action="create-barang.php" method="POST">
            <h1>Tambah Barang</h1>
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>
                        <select name="kategori">
                            <option value="cincin">cincin</option>
                            <option value="kalung">kalung</option>
                            <option value="gelang">gelang</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="number" min="0" name="stok"></td>
                </tr>
                <tr>
                    <td>Harga harga</td>
                    <td><input type="number" min="0" name="harga_jual"></td>
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