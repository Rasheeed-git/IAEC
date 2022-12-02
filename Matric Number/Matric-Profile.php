<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include('../includes/head.php'); ?>
  <link rel="stylesheet" href="../css/MatricNumber.css">
  <!--for the title it will collect the login name-->
  <!--style-->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?php 
    include('../includes/Admission-Topbar.php');
    ?>

<div class="content-wrapper">

<!--SideBar-->
<aside class="main-sidebar sidebar-dark-primary elevation-10">
    <!-- Brand Logo -->
    <a href="https://iaec-university.tg" class="brand-link">
      <img src="../Images/iaec-logo.png" alt="IEAC-Logo" class = "logo">
      <span>IAEC University Togo</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-1 d-flex">
        <div class="image">
          <img src="../Images/Mensah.jpg" class="profile-user-img img-fluid img-circle" alt="User-Image">
        </div>
        <div class="info"> 
          <a href="#" class="d-block">Jean Hermann Mensah</a>
          <a href="#" class="d-block"> * online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="Matric-Dashboard.php" class="nav-link" >
            <i class="fa-solid fa-gauge"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="MatricNumber.php" class="nav-link">
              <i class="fa-solid fa-graduation-cap"></i>
              <p>
                Matric Number
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="Matric-Profile.php" class="nav-link active bg-light">
            <i class="fa-solid fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Manage-Matric-Profile.php" class="nav-link">
            <i class="fa-solid fa-gear"></i>
              <p>
                Manage Profile
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    
  </aside>
 
    <!--/SideBar-->
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0">
            </h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="Admission-Dashboard.php" class = "breadcrumb-link">Dashboard</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="div-align">
<section class="content"> 
    	<div class="row">
        	<div class="col-md-7">
            	<div class="panel"><!--panel bg-maroon--> 
                	<div class="panel-heading">	
                    	<h4 class="panel-title" id="hname">Welcome! Mensah</h4>
                    </div>				
                    <div class="panel-body"><!--panel-body -->
                    	<div class="row" id="my_profile">
                			<div class="col-md-3"> 
                				<img id="photo2" alt="User Pic" src="../Images/Mensah.jpg" class="img-circle img-responsive"> 
                			</div>
                			<div class=" col-md-9"> 
                  				<table class="table table-bordered table-striped">
                    				<tbody>
                      					<tr>
                        					<td class="col-md-4">Full Name</td>
                        					<td id="full_name">Jean Hermann Mensah</td>
                      					</tr>
                      					<tr>
                        					<td>Name With Initials</td>
                        					<td id="i_name">Mensah </td>
                      					</tr>
                             			<tr>
                        					<td>Address</td>
                        					<td id="address">Togo Lome </td>
                      					</tr>
                        				<tr>
                        					<td>Gender</td>
                        					<td id="gender">Male </td>
                      					</tr>
                      					<tr>
                        					<td>Email</td>
                        					<td id="email">Mensah@gmail.com </td>
                      					</tr>
                                        <tr>
                        					<td>Phone Number</td>
                        					<td id="phone">111-111-1114 </td>
                      					</tr>
                                        <tr>
                        					<td>User Name</td>
                        					<td id="email">Mensah@gmail.com </td>
                      					</tr>
                                        <tr>
                        					<td>Password</td>
                        					<td id="phone">12345 </td>
                      					</tr>
                    				</tbody>
                  				</table>
                  			</div>
                   		</div>
                        <p class= "footer"><strong>Note: We get the email address for the user name.</strong></p>
                     </div>
            	</div><!--/. panel--> 
        	</div>
		</div><!--/.row --> 
</section>
</div>
    
    
</div>
    <footer class="main-footer">
        <strong>© <a href = "https://iaec-university.tg" class = "footer-link">IAEC University Togo</a> |  All rights reserved 2023 | Design & Developed By <a href="#" class = "footer-link">HR_Rashid Tech.</a></strong>
    </footer>
</div>

<!--Script-->
<?php 
  include('../includes/script.php');
  include("../includes/Webscript.php");
?>
 <!--/Script-->
</body>
</html>