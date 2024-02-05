<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #CED5E5;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        main {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            padding: 10px;
            background-color: #C5BCD5;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
</head>
<body>
	<form action="validasi.php" method="POST">
		<h1>Selamat Datang!</h1>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Passsword</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td calspan="2">
					<button type="submit">LOGIN</button>
					<button type="reset">CLEAR</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>


