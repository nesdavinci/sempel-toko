<!DOCTYPE html>
<html>

<head>
    <title>Profil</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    ?>

    <div>
        <form action="update-profil.php" method="POST">
            <h1>Profil</h1>

            <input type="hidden" name="id" value="<?= $id ?>">

            <table>
                <tr>
                    <td>Nama</td>
                    <td><input required type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Sandi Baru</td>
                    <td><input required type="password" name="new_password"></td>
                </tr>
                <tr>
                    <td>Ulangi sandi Baru</td>
                    <td><input required type="password" name="confirm_password"></td>
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