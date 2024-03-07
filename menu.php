<html>

<head>
	<meta charset="utf-8" />
	<title>HOME</title>
	<link href="home.php" rel="stylesheet" type="text/css" />
</head>

<body>
	<nav>
		<div class="navbar">
			<div class="container nav-container">
				<input class="checkbox" type="checkbox" name="" id="" />
				<div class="hamburger-lines">
					<span class="line line1"></span>
					<span class="line line2"></span>
					<span class="line line3"></span>
				</div>
				<div class="home">
					<h2>
						<li><a href="home.php">HOME</a></li>
						<h2>
				</div>
				<div class="menu-items">
					<li>
						<a href="user.php">User</a>
					</li>
					<li>
						<a href="barang.php">Barang</a>
					</li>
					<li>
						<a href="penjualan.php">Penjualan</a>
					</li>
					<li>
						<a href="profil.php">Profil</a>
					</li>
						<a href="logout.php">logout</a>
					</li>
				</div>
			</div>
		</div>
	</nav>
</body>

</html>


<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

	{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

.body {
	font-family: "Poppins", sans-serif;
	background-color: #e7d7c9;
    background-size: cover;
    padding: 20px;
}

.container {
	max-width: 1050px;
	width: 90%;
	margin: auto;
}

.navbar {
	background-color: rgba(0, 0, 0, 0.5);
    padding: 20px;
}

.nav-container {
	display: flex;
	justify-content: space-between;
	align-items: center;
	height: 62px;
}

.navbar .menu-items {
	background-color:  rgba(0, 0, 0, 0.5);
}

.navbar .nav-container li {
	list-style: none;
}

.navbar .nav-container a {
	text-decoration: none;
	color: #0e2431;
	font-weight: 500;
	font-size: 1.2rem;
	padding: 0.7rem;
}

.navbar .nav-container a:hover {
	font-weight: bolder;
}

.nav-container {
	display: block;
	position: relative;
	height: 60px;
}

.nav-container .checkbox {
	position: absolute;
	display: block;
	height: 32px;
	width: 32px;
	top: 20px;
	right: 20px;
	z-index: 5;
	opacity: 0;
	cursor: pointer;
}

.nav-container .hamburger-lines {
	display: block;
	height: 26px;
	width: 32px;
	position: absolute;
	top: 17px;
	right: 20px;
	z-index: 2;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.nav-container .hamburger-lines .line {
	display: block;
	height: 4px;
	width: 100%;
	border-radius: 10px;
	background: #d4b2a7;
}

.nav-container .hamburger-lines .line1 {
	transform-origin: 0% 0%;
	transition: transform 0.4s ease-in-out;
}

.nav-container .hamburger-lines .line {
	transition: transform 0.2s ease-in-out;
}

.nav-container .hamburger-lines .line3 {
	transform-origin: 0% 100%;
	transition: transform 0.4s ease-in-out;
}

.navbar .menu-items {
	padding-top: 120px;
	box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
	height: 100vh;
	width: 100%;
	transform: translate(-150%);
	display: flex;
	flex-direction: column;
	margin-left: -40px;
	padding-left: 50px;
	transition: transform 0.5s ease-in-ou ;
	text-align: center;
}

.navbar .menu-items li {
	margin-bottom: 1.2rem;
	font-size: 1.5rem;
	font-weight: 500;
}

.nav-container input[type="checkbox"]:checked~.menu-items {
	transform: translateX(0);
}

.nav-container input[type="checkbox"]:checked~.hamburger-lines .line1 {
	transform: rotate(45deg);
}

.nav-container input[type="checkbox"]:checked~.hamburger-lines .line2 {
	transform: scaleY(0);
}

.nav-container input[type="checkbox"]:checked~.hamburger-lines .line3 {
		transform: rotate(-45deg);
	}
</style>