<?php
session_start();
if(!isset($_SESSION['adminloginid']))
{
    header("location: admin.php");
}

?>
<?php
require('connect.php');
?>
<body>
<form action="admin.php" class="form" method="POST">


	<div class="">
	<?php
		// check to see if the user successfully created an account
		if (isset($success) && $success == true){
			echo '<p color="green">Yay!! Your account has been created. <a href="./portal.php">Click here</a> to login!<p>';
		}
		// check to see if the error message is set, if so display it
		else if (isset($error_msg))
			echo '<p color="red">'.$error_msg.'</p>';
		
	?>
<!--  -->

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CodingLab</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="adminpanel.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add Employee</span>
          </a>
        </li>
        <li>
          <a href="show_emp.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Show Employee</span>
          </a>
        </li>
        <li class="log_out">
        <a href="">
            <i class='bx bx-log-out'></i>
            <span class="links_name"></span>
            <button name="logout">Log Out</button>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Hrithik Bansal</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

<br><br><br>

<h2 align="center" style="color: white; background-color:  #000099; font-family: Comic sans MS;" >Create new Account</h2>
<div class="" align="center" style="padding: 10">
		<label>Name: </label>
		<input type="text" name="username" value="" placeholder=" Enter a username" autocomplete="off" required />
	</div>
	<div class="" align="center">
		<label>Email: </label>
		<input type="email" name="email" value="" placeholder=" Provide an email" autocomplete="off" required />
	</div>
	<div class="" align="center" style="padding: 10">
		<label>Password: </label>
		<input type="password" name="passwd" value="" placeholder=" Enter a password" autocomplete="off" required />
	</div>
	<div class="" align="center">
		<!-- <p>**Password must be at least 5 characters and<br /> have a special character, e.g. !#$.,:;()</font></p> -->
	</div>					
	<div class="" align="center" style="padding: 10">
		<label>Confirm Password:</label>
		<input style="padding:2 30;" type="password" name="confirm_password" value="" placeholder="Confirm password" autocomplete="off" required />
	</div>
<div align="center">
 <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> By creating an account you agree to our <a href=""> Terms & Privacy </a>
    </label>
    
</div>

	<div class="" align="center">
		</br>
		<input class="" style="padding: 12 13; cursor: pointer;" type="submit" name="registerBtn" value="Create Account" />
	</div>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("admin.php");
}
?>
</body>
</html>




	
