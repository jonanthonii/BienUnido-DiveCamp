<!DOCTYPE html>
<html>
<head>
	<title>DiveCamp-Dashboard</title>

    <link rel="stylesheet" href="User_HomePage.css">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/fdad5daede.js" crossorigin="anonymous"></script>
	
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">DIVE <b>CAMP</b>
			<label for="checkbox">
				<i id="navbtn" class="fa-solid fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/dc.jpg">
				<h4>Profile</h4>
			</div>
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="User_Reservation.php">
						<i class="fa fa-book" aria-hidden="true"></i>
						<span>Reservation</span>
					</a>
				</li>
				<li>
					<a href="User_ContactUs.php">
						<i class="fa fa-message" aria-hidden="true"></i>
						<span>Contact us</span>
					</a>
				</li>
				<li>
					<a href="User_About.php">
						<i class="fa fa-info-circle" aria-hidden="true"></i>
						<span>About</span>
					</a>
				</li>
				<li>
					<a href="User_Profile.php">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>Profile</span>
					</a>
				</li>
				<li>
					<a href="LandingPage.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<h1>
				RESERVATION
			</h1>

			<div class="cardGrid">
				<div class="card" >
					<a href="RoomReserve.php">
						<img src="img/hotel.jpg" alt="Avatar" style="width:10%;"	class="imgHotel">
						<center><h4>Rare Hotel</h4></center>
						<p>Location: Bohol</p>
						<p>Starting from: ₱ 2000</p>
						<p>Ratings: 8/10</p>
					</a>
				</div>

				<div class="card" >
					<a href="RoomReserve.php">
						<img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
						<center><h4>Rare Hotel</h4></center>
						<p>Location: Bohol</p>
						<p>Starting from: ₱ 2000</p>
						<p>Ratings: 8/10</p>
					</a>
				</div>

				<div class="card" >
					<a href="RoomReserve.php">
						<img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
						<center><h4>Rare Hotel</h4></center>
						<p>Location: Bohol</p>
						<p>Starting from: ₱ 2000</p>
						<p>Ratings: 8/10</p>
					</a>
				</div>

				
					<div class="card" >
						<a href="RoomReserve.php">
							<img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
							<center><h4>Rare Hotel</h4></center>
							<p>Location: Bohol</p>
							<p>Starting from: ₱ 2000</p>
							<p>Ratings: 8/10</p>
						</a>
					</div>
				
			</div>

			<div>
				<a href="#" class="previous">&laquo; Previous</a>
				<a href="#" class="next">Next &raquo;</a>
			</div>
		</section>
	</div>
</body>
</html>