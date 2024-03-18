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
            <table border="1">
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
                        <td>Harga</td>
                        <td><input type="number" min="0" name="harga"></td>
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
        color: #black;
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
        border: 2px solid #e7d7c9;
        padding: 7px 20px;
        outline: none;
        color: black;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
    }
</style>