<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form</title>

<body>

	<form class="box" action="validasi.php" method="post">
		<h1>Login</h1>
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="Password">
		<div class="container">
			<button class="left-button">Login</button>
			<button class="right-button">Clear</button>
			<div style="clear:both;"></div>
		</div>

	</form>


</body>
<style>
	body {
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background: #ede9e3;
		background-image: url('https://i.pinimg.com/564x/e4/bc/09/e4bc09ae3fc89f20ba818816a3805ec4.jpg');
	}

	.box {
		width: 300px;
		padding: 40px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: #e7d7c9;
		background-color: rgba(0, 0, 0, 0.5); /* Warna latar belakang dengan transparansi */
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
		border: 2px solid #d4b2a7;
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
		border: 2px solid #d4b2a7;
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
		border: 2px solid #d4b2a7;
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