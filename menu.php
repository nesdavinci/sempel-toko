<?php
    session_start();

    if (!array_key_exists("username", $_SESSION)) {
    	header("location:logout.php");
    }
?>

<nav>
	<ul>
		<li><a href="home.php">HOME</a></li>
		<li>MASTER
			<ul>
				<?php if ($_SESSION["level"] == "admin") : ?>
					<li><a href="user.php">User</a></li>
				<?php endif ?>
				<li><a href="barang.php">Barang</a></li>
			</ul>
		</li>
		<li>TRANSAKSI
			<ul>
				<li><a href="penjualan.php">Penjualan</a></li>
				<li><a href="pembelian.php">Pembelian</a></li>
			</ul>
		</li>
		<li>Selamat datang, <?= $_SESSION["username"] ?>!
			<ul>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="logout.php">Log out</a></li>
			</ul>
		</li>
	</ul>
</nav>

<style>
nav{
   height: 4.5rem;
   width: 100vw;
   background-color: #131418;
   box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
   display: flex;
   position: fixed;
   z-index: 10;
}
.nav-links{
   display: flex;
   list-style: none; 
   width: 88vw;
   padding: 0 0.7vw;
   justify-content: space-evenly;
   align-items: center;
   text-transform: uppercase;
}
.nav-links li a{
   text-decoration: none;
   margin: 0 0.7vw;
}
.nav-links li a:hover {
   color: #61DAFB;
}
.nav-links li {
   position: relative;
}
.nav-links li a:hover::before{
   width: 80%;
}
.login-button:hover {
   color: #131418;
   background-color: #f2f5f7;
   border:1.5px solid #f2f5f7;
   transition: all ease-in-out 350ms;
}
.join-button{
   color: #131418;
   background-color: #61DAFB;
   border: 1.5px solid #61DAFB;
   border-radius: 2em;
   padding: 0.6rem 0.8rem;
   font-size: 1rem;
   cursor: pointer;
}
.join-button:hover {
   color: #f2f5f7;
   background-color: transparent;
   border:1.5px solid #f2f5f7;
   transition: all ease-in-out 350ms;
}
.hamburger div{
   width: 30px;
   height:3px;
   background: #f2f5f7;
   margin: 5px;
   transition: all 0.3s ease;
}
.hamburger{
   display: none;
}
@media screen and (max-width: 800px){
   nav{
       position: fixed;
       z-index: 3;
   }
   .hamburger{
       display:block;
       position: absolute;
       cursor: pointer;
       right: 5%;
       top: 50%;
       transform: translate(-5%, -50%);
       z-index: 2;
       transition: all 0.7s ease;
   }
   .nav-links{
       position: fixed;
       background: #131418;
       height: 100vh;
       width: 100%;
       flex-direction: column;
       clip-path: circle(50px at 90% -20%);
       -webkit-clip-path: circle(50px at 90% -10%);
       transition: all 1s ease-out;
       pointer-events: none;
   }
   .nav-links.open{
       clip-path: circle(1000px at 90% -10%);
       -webkit-clip-path: circle(1000px at 90% -10%);
       pointer-events: all;
   }
   .nav-links li{
       opacity: 0;
   }
   .nav-links li:nth-child(1){
       transition: all 0.5s ease 0.2s;
   }
   .nav-links li:nth-child(2){
       transition: all 0.5s ease 0.4s;
   }
   .nav-links li:nth-child(3){
       transition: all 0.5s ease 0.6s;
   }
   .nav-links li:nth-child(4){
       transition: all 0.5s ease 0.7s;
   }
   .nav-links li:nth-child(5){
       transition: all 0.5s ease 0.8s;
   }
   .nav-links li:nth-child(6){
       transition: all 0.5s ease 0.9s;
       margin: 0;
   }
   .nav-links li:nth-child(7){
       transition: all 0.5s ease 1s;
       margin: 0;
   }
   li.fade{
       opacity: 1;
   }
}
/*Animating Hamburger Icon on Click*/
.toggle .line1{
   transform: rotate(-45deg) translate(-5px,6px);
}
.toggle .line2{
   transition: all 0.7s ease;
   width:0;
}
.toggle .line3{
   transform: rotate(45deg) translate(-5px,-6px);
}
</style>


				