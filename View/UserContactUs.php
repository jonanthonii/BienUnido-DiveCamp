<!DOCTYPE html>
<html>
<head>
	<title>DiveCamp-ContactUs</title>

    <link rel="stylesheet" href="css/User_ContactUs.css">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/fdad5daede.js" crossorigin="anonymous"></script>
	
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="header-menu">
				<div class="title">Dive <span>Camp</span></div>
				<div class="sidebar-btn">
				 <input type="checkbox" name="hide-sidebar" id="hide-sidebar" value="true" />
					 <label for="hide-sidebar">
						 <i id="navbtn" class="fa-solid fa-bars" aria-hidden="true"></i>
					 </label>
				</div>
				 <ul>
					 <li><a href="#"><i class="fas fa-desktop"></i></a></li>
					 <li><a href="#"><i class="fas fa-book"></i></a></li>
					 <li><a href="#"><i class="fas fa-power-off"></i></a></li>
				 </ul>
			</div>
		</div>
 
		<div class="sidebar">
			<div class="sidebar-menu">
				 <center class="profile">
					<img src="img/dc.jpg" alt="">
					<p>Profile</p>
				 </center>
				 <li class="item"><a href="UserHomePage.php" class="menu-btn"><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
				 <li class="item" id="reservation"><a href="UserReservation.php" class="menu-btn"><i class="fas fa-book"></i><span>Reservation</span></a></li>
				 <li class="item" id="contact-us"><a href="UserContactUs.php" class="menu-btn"><i class="fas fa-message"></i><span>Contact us</span></a></li>
				 <li class="item" id="about"><a href="UserAbout.php" class="menu-btn"><i class="fas fa-circle-info"></i><span>About us</span></a></li>
				 <li class="item" id="profile"><a href="UserProfile.php" class="menu-btn"><i class="fas fa-circle-user"></i><span>Profile</span></a></li>
				 <li class="item" id="logout"><a href="UserLogin.php" class="menu-btn"><i class="fas fa-power-off"></i><span>Logout</span></a></li>
			</div>
		</div>
 
		<div class="main-container">WELCOME TO CONTACT US</div>
		
	</div>
 </body>
</html>