<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/fdad5daede.js" crossorigin="anonymous"></script>
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
html {
  font-family: 'Poppins'sans-serif;
  font-size: 15px;
  scroll-behavior: smooth;
  overflow-y: scroll;
  scroll-behavior: smooth;
}

.head {
  display: inline-block;
  margin-left: 25px;
  font-size: 18px;
  text-align: left;
  padding: 40px 20px;
}
.head .logo{
  color: #9dc88d;
}
.head .logo b{
  color: #f1b24a;
}
/* sidebar */
.sidebar {

  margin: 0; 
  padding: 0px 0px;
  width: 230px;
  background-image: linear-gradient(to right, #164a41, #205545, #2d6148, #3c6c49, #4d774a);
  position: fixed;
  height: 100%;
  overflow: auto;
  overflow-x: hidden;
}
.sidebar .profile img{
  margin: 20px;
  height: 100px;
  width: 100px;
  border: 4px solid #164a41;
  border-radius: 50px;
  object-fit: cover;
}
.sidebar b{
  color: #fff;
  float: center;
}
.sidebar .side-nav{
  display: inline-block;
  margin: 50px 0;
}
.sidebar .side-nav i{
  border-radius: 50px;
  border: 2px solid #f1b24a;
  padding: 5px 5px;
  background-color: #f1b24a;
  color: #164a41;
}
.sidebar .side-nav a{
  width: 230px;
  display: block;
  letter-spacing: 1px;
  text-decoration: none;
  color: #fff;
  font-size: 14px;
  padding: 10px 30px;
  justify-content: center;
  align-items: center;
}
.sidebar .side-nav a:hover{
  background:#fff;
  padding: 10px 30px;
  color: #164a41; 
}
.sidebar .side-nav i:hover{
  background: #164a41;;
  border: 2px solid #164a41;
  color: #f1b24a; 
}
/* container */
.container{
  width: 100%;
  height: auto;
  padding: 10px 0;
}
.container .content{
  line-height: 30px;
  display: block;
  height: auto;
  width: auto;
  margin-left: 240px;
  padding: 5px 10px;
}
.container .content h1{
  color: #164a41;
  text-align: center;
  width: auto;
  background-image: linear-gradient(to bottom, #d5f0d6, #dff4df, #e9f7e7, #f2fbf1, #ffffff);
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  padding: 50px 0px;
}
/* media */

@media screen and (max-width: 600px) {
  html{
    overflow-x: hidden;
  }
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
    font-size: 12px;
  }
  .sidebar .head{
    margin-left: 50px;
    font-size: 14px;
  }
  .sidebar .profile img{
    height: 80px;
    width: 80px;
  }
  .sidebar .side-nav a{
    font-size: 12px;
    width: 510px;
  }
  .container .content{
      width: 95%;
      margin: 2%;
  }
}
.btn{
  padding: 10px;
  border-radius: 12px;
  background-color: lightgreen;
}
</style>
</head>
<body>
  <div class="sidebar">
    <div class="head">
      <label class="logo"><i class="fa fa-house"></i><span>&nbsp;&nbsp;</span>Dive<b>Camp</b></label>
    </div>
      <center class="profile"><br>
      <img src="../public/img/uploads/<?php echo $_SESSION['picname'];?>" alt=""><br>
        <b><?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['lastname'];?></b>
      </center>
      <div class="side-nav nav">
        <a class="nav1"  href="<?php echo URLROOT; ?>/pages/home" class="menu-btn"><i class="fas fa-desktop"></i><span>&nbsp;&nbsp;</span> Dashboard</a><br>
        <a class="nav2" href="<?php echo URLROOT; ?>/pages/reservation" class="menu-btn"><i class="fa fa-book"></i><span>&nbsp;&nbsp;</span> Reservation</a><br>
        <a class="nav3" href="<?php echo URLROOT; ?>/pages/profile" class="menu-btn"><i class="fa fa-user-circle"></i><span>&nbsp;&nbsp;</span> Profile</a><br>
        <a class="nav4" href="<?php echo URLROOT; ?>/users/logout" class="menu-btn"><i class="fa fa-power-off"></i><span>&nbsp;&nbsp;</span> Logout</a><br>
      </div>  
  </div>
  <div class="container">
    <div class="content">
      <h1> Reservation </h1><br>
      <form action="<?php echo URLROOT; ?>/pages/createreservation" method="POST">
        <div class="form-item">
          <input type="hidden" name="roomid" value="">
          <input type="date" name="checkin_date" id="checkin_date">
          <?php echo $data['checkin_dateError']; ?>
        </div>
        <div class="form-item">
          <input type="date" name="checkout_date" id="checkout_date">
          <?php echo $data['checkout_dateError']; ?>
        </div>
        <div class="form-item">
          <input type="number" name="number_of_adult" placeholder="Number of Adult">
          <?php echo $data['number_of_adultError']; ?>
        </div>
        <div class="form-item">
          <input type="number" name="number_of_child" placeholder="Number of Child">
          <?php echo $data['number_of_childError']; ?>
        </div>
        <div class="form-item">
          <input type="text" name="mobile_number" placeholder="Mobile Number">
          <?php echo $data['mobile_numberError']; ?>
        </div>
        <button class="btn create" name="submit" type="submit">Book</button>
      </form>
    </div>
  </div>
</body>
</html>
	