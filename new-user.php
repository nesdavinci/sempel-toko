<!DOCTYPE thml>
<html>

<head>
	<title>New User</title>
</head>

<body>
	<?php include "menu.php"; ?>

	<?php
	?>

	<div>
		<form action="create-user.php" method="POST">
			<h1>Tambah Pengguna</h1>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Pasword</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
                    <td>Level</td>
                    <td>
                    	<select name="level">
                   	    	<option value="admin">admin</option>
                   		    <option value="keuangan">keuangan</option>
                   		    <option value="logistik">logistik</option>
                       	</select>
                   </td>
                </tr>
                <tr>
               	<td colspan="2">
               		<button type="submit">TAMBAH</button>
               		<button type="submit">SIMPAN</button>
               		<button type="reset">RESET</button>
               	</td>
               </tr>
           </tabel>
       </form>
   </div>
</body>

</html>