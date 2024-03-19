<!DOCTYPE html>
<html>

<head>
    <title>New User</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

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

<body>
    <?php include "menu.php"; ?>

    <?php
    ?>

    <div>
        <form class="box" action="create-user.php" method="POST">
            <h1>Tambah Pengguna</h1>
            <table>
                <tr>
                    <td><input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td>
                       <div class="btn-group dropup">
                            <button type="button" class="btn btn-secondary">
                            	Level
                            </button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Level</span></button>
                            <ul class="dropdown-menu">
                            </ul>
                        </div>
                    </td>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </script>
</body>

</html>