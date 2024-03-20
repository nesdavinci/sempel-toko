<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8" />
    <title>HOME</title>
    <link href="home.php" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="home.php">BERANDA</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a href="profil.php">Profil</a></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="user.php">Pengguna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="barang.php">Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="penjualan.php">Penjualan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="pelanggan.php">Pelanggan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="profil.php">Profil</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="logout.php" class="logout-button">Keluar</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <section class="hero-section">
        <div class="container d-flex align-items-center justify-content fs-1 text-white flex-column">
        </div>
    </section>
</body>

</html>

<style>
.navbar {
	background-color: #e7d7c9;
	height: 80px;
	margin: 20px;
	border-radius: 16px;
	padding: 0.5em;
	position: relative;
	z-index: 1000;
}

.navbar {
	background-color: #e7d7c9;
	height: 80px;
}

.navbar-brand {
	font-weight: 500;
	color: black;
	font-size: 24px;
	transition: 0.3s color;
}	

.navbar-brand:hover, 
.navbar-brand:active {
	color: #d4b2a7;
	color: #d4b2a7;
}

.container-fluid {
    background-color: #e7d7c9;
}

.logout-button {
	background-color: #d4b2a7;
	color: black;
	font-size: 14px;
	padding: 8px 20px;
	border-radius: 50px;
	text-decoration: none;
	transition: 0.3 background-color:
}

.logout-button:hover {
	background-color: #e7d7c9;
}

.navbar-toggler {
	border: none;
	font-size: 1.25em;
}

.navbar-toggler:focus, .btn-close:focus {
	box-shadow: none;
	outline: none;
}

.nav-link {
	color: black;
	font-weight: 500;
	position: relative;
}

.nav-link:hover, .nav-lin:active {
	color: #d4b2a7;
}

@media (min-width: 991px) {
.nav-link::before {
	content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 2px;
    background-color: #d4b2a7;
    visibility: hidden;
    transition: 0.3s ease-in-out;
}

.nav-link:hover::before, .nav-lin:hover::before {
	width: 100%;
	visibility: visible;
}

}

.offcanvas-header {
	background-color: #d4b2a7;
}

.offcanvas-title a {
	color: black;
	font-size: 20px;
	text-decoration: none;
}

.offcanvas-title a:hover {
    color: #e7d7c9;
    text-decoration: underline;
}

.offcanvas-body {
	background-color: #e7d7c9;
}
</style>