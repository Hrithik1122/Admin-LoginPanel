<?php
require("connect.php");
// $aa = $_POST['id'];
// echo $aa;
// die();

$lj = "SELECT id,username,email,password FROM `users_reg` WHERE id='".$_GET['id']."' ";
$records = $db->query($lj);
$array = $records->fetch_array();
?>


<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
          <a href="register.php">
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
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
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

<h2 align="center" style="color: white; background-color:  #000099; font-family: Comic sans MS;" >Edit Details</h2>
	
<form method="POST" action="show_emp.php">
<div class="" align="center" style="padding: 10">
		<label>Name: </label>
		<input type="text" name="username" value="<?php echo $array['username'] ?>" placeholder=" Enter a username" autocomplete="off" required />
	</div>
	<div class="" align="center">
		<label>Email: </label>
		<input type="email" name="email" value="<?php echo $array['email'] ?>" placeholder=" Provide an email" autocomplete="off" required />
	</div>
	<div class="" align="center" style="padding: 10">
		<label>Password: </label>
		<input type="password" name="passwd" value="<?php echo $array['passwd'] ?>" placeholder=" Enter a password" autocomplete="off" required />
	</div>
	<div class="" align="center">
		<!-- <p>**Password must be at least 5 characters and<br /> have a special character, e.g. !#$.,:;()</font></p> -->
	</div>					
	<div class="" align="center" style="padding: 10">
		<label>Confirm Password:</label>
		<input style="padding:2 30;" type="password" name="confirm_password" value="<?php echo $array['confirm_password'] ?>" placeholder="Confirm password" autocomplete="off" required />
	</div>
	<div align="center" style="padding: 2px 30px; margin:20px;">
  <button type="submit" name="edit_it" style="padding: 12 ; cursor: pointer;">Update</button>
<input type="hidden" name="user_id" value="<?php echo $_GET['id'] ?>">
</form>
</body>
</html>