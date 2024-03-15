<!DOCTYPE html>
<html>

<head>
    <title>New Pelanggan</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    ?>

    <div>
        <table border="1">
            <form action="create-pelanggan.php" method="POST">
                <h1>Tambah pelanggan</h1>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td><input class="button" type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td>
                            <select class="button" name="kategori">
                                <option value="cincin">cincin</option>
                                <option value="kalung">kalung</option>
                                <option value="gelang">gelang</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input class="button" type="number" min="0" name="harga_beli"></td>
                    </tr>
                </table>
            </form>
        </table>
        <button class="button" type="submit">SIMPAN</button>
        <button class="button" type="reset">RESET</button>
    </div>
</body>

</html>

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
        background-color: #d4b2a7;
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
</style>