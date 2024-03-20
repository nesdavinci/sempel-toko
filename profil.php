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
        <form class="box" action="update-profil.php" method="POST">
            <h1>Profil</h1>

            <input type="hidden" name="id" value="<?= $id ?>">

            <table>
                <tr>
                    <td><input class="button" required type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td><input class="button" required type="password" name="new_password" placeholder="New password"></td>
                </tr>
                <tr>
                    <td><input class="button" required type="password" name="confirm_password" placeholder="Confirm Password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="left-button" type="submit">SIMPAN</button>
                        <button class="right-button" type="reset">RESET</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

<style>
	body {
		background-color: #d4b2a7;
	}

	.box {
		width: 300px;
		padding: 40px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: #e7d7c9;
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
		border-color: #474973;
	}

	.left-button {
		float: left;
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 2px solid #e7d7c9;
		padding: 14px 40px;
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;
		cursor: pointer;
	}

	.right-button {
		float: right;
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 2px solid #e7d7c9;
		padding: 14px 40px;
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;
		cursor: pointer;
	}

	.container::after {
		content: "";
		display: table;
		clear: both;
	}


	.box input[type="submit"]:hover {
		background: #2ecc71;
	}
</style>

</html>