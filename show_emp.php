<?php
require('connect.php');
?>


<!DOCTYPE html>
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




<!-- <th colspan="4" height="100%" width="100%"> -->
<h2 align="center" style="color: white; background-color:  #000099; font-family:Comic sans MS;" >Employees List</h2>
</th> 
<table style="width:100%" >
<tr>
		<th width="20%"> S. No.</th> 
		<th width="20%"> Name</th> 
		<th width="20%"> Email</th> 
    <th width="20%"> Password </th> 
    <th width="20%"> Action</th> 
</tr>



<?php 
$lj = "SELECT * FROM `users_reg`";
$records = $db->query($lj);
while($username = $records->fetch_array())
{
?>
    <tr align="center"> 
    <td><?php echo $username['id']; ?></td> 
    <td><?php echo $username['username']; ?></td> 
    <td><?php echo $username['email']; ?></td> 
    <td><?php echo $username['password']; ?></td>
    <td><a href="edited.php?id=<?php echo $username['id'];?>" type="button" style="cursor: pointer;">Edit</a><button type="button" style="cursor: pointer;">Delete</button></td>
    </tr>

    
    <?php
  }
    ?>



</table>



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
if (isset($_POST['edit_it'])){
  $update = "UPDATE users_reg SET username='".$_POST['username']."', email='".$_POST['email']."', password='".$_POST['confirm_password']."' WHERE id='".$_POST['user_id']."'";
// echo $update;
$sql = $db->query($update);


// var_dump($sql);
// die();
}
// echo "Your data submitted";
// print_r($rows);

$db->close();
?>
</body>
</html>