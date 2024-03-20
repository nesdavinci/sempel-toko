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
        <form class="box" action="update-barang.php" method="POST">
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
                        <select class="button" name="kategori">
                            <option value="cincin" <?= $barang["kategori"] == "cincin" ? "selected" : "" ?>>cincin</option>
                            <option value="kalung" <?= $barang["kategori"] == "kalung" ? "selected" : "" ?>>kalung</option>
                            <option value="gelang" <?= $barang["kategori"] == "gelang" ? "selected" : "" ?>>gelang</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input class="button" type="number" name="stok" value="<?= $barang["stok"] ?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input class="button" type="number" name="harga" value="<?= $barang["harga"] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="button" type="submit">SIMPAN</button>
                        <button class="button" type="reset">RESET</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

<style>
body {
    background: #d4b2a7;
}

.box {
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    backdrop-filter: blur(10px);
    text-align: center;
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500;
}

.box input[type="text"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #e7d7c9;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
}

.box input[type="text"]:focus,
.box input[type="password"]:focus {
    width: 280px;
    border-color: #e7d7c9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown .btn {
  background-color: #d4b2a7;
  color: black;
  padding: 10px 20px;
  border: none;
  cursor: pointer; 
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  min-width: 160px;
  background-color: #d4b2a7;
  border: 1px solid rgba(0, 0, 0, 0.15);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
}

.dropdown-menu li {
  list-style: none;
}

.dropdown-menu li a {
  display: block;
  padding: 10px 20px;
  color: black;
  text-decoration: none;
  transition: background-color 0.3s;
}

.dropdown-menu li a:hover {
  background-color: #e7d7c9;
}


.table {
    margin: 0 auto;
    border-collapse: collapse;
}

.th,
.td {
    border: 1px solid #e7d7c9;
    padding: 8px;
    text-align: center;
    background-color: #e7d7c9;
}

.th {
    background-color: #e7d7c9;
}

.tr:hover {
    background-color: #d4b2a7;
}

.button {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #e7d7c9;
    padding: 7px 20px;
    outline: none;
    color: black;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
</style>

</html>