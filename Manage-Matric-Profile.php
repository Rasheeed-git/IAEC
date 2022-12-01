<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include('includes/head.php'); ?>
  <link rel="stylesheet" href="css/MatricNumber.css">
  <!--for the title it will collect the login name-->
  <!--style-->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?php 
    include('includes/Admission-Topbar.php');
    ?>

<div class="content-wrapper">

<!--SideBar-->
<aside class="main-sidebar sidebar-dark-primary elevation-10">
    <!-- Brand Logo -->
    <a href="https://iaec-university.tg" class="brand-link">
      <img src="./Images/iaec-logo.png" alt="IEAC-Logo" class = "logo">
      <span>IAEC University Togo</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-1 d-flex">
        <div class="image">
          <img src="./Images/Mensah.jpg" class="profile-user-img img-fluid img-circle" alt="User-Image">
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
            <a href="Matric-Profile.php" class="nav-link">
            <i class="fa-solid fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Manage-Matric-Profile.php" class="nav-link active bg-light">
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
              <li class="breadcrumb-item active">Manage Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content"> 
    	<div class="row">
        	<div class="col-md-7">
            	<div class="panel"><!--panel bg-maroon--> 	
                <div class="panel-heading bg-aqua-active" style= "background-color:#d43f8d;">	
                    	<h4 class="panel-title" id="hname">Welcome! Update Details</h4>
                    </div>			
                    <div class="panel-body"><!--panel-body -->
                    	<div class="row" id="my_profile">
                            <form action="../index.php" method="POST" enctype="multipart/form-data">
	<div class="panel-body"><!--panel-body -->
    	<div class="row">
            <div class="col-md-4" id="divPhoto"> 
                <img id="profile_pic1" alt="User Pic" src="Images/Mensah.jpg" class="img-circle img-responsive">
                <input type="file" name="fileToUpload" id="fileToUpload" style="margin-top:1em;"> 
            </div>
            <div class=" col-md-8" id="divTable"> 
                <table class="table table-bordered table-striped">
                    <tbody class="content-body">
                        <tr id="trFullName">
                            <td class="col-md-4" id="tdFullName1">Full Name</td>
                            <td id="tdFullName2"><input type="text" class="form-control" value="" name="full_name" id="full_name1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td id="tdIName1">Name With Initials</td>
                            <td id="tdIName2"><input type="text" class="form-control" value="" name="i_name" id="i_name1" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td id="tdAddress1">Address</td>
                            <td id="tdAddress2"><input type="text" class="form-control" value="" name="address" id="address1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td id="tdGender1">Gender</td>
                            <td id="tdGender2">
                                <select name="gender" class="form-control" id="gender2">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td id="tdEmail1">Email</td>
                            <td id="tdEmail2"><input type="text" class="form-control" value="" name="email" id="email1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td id="tdPhone1">Phone Number</td>
                            <td id="tdPhone2"><input type="text" class="form-control" value="" name="phone" id="phone1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td id="user_name1"><input type="text" class="form-control" value="" name="phone" id="phone1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td id="tdPassword1">Password</td>
                            <td id="tdPassword2"><input type="password" class="form-control" value="" name="password" id="password1" autocomplete="off"></td>
                        </tr>
                    </tbody>
                </table>
            </div>  
		</div>
        <div class="panel-footer text-right">
        <input type="button" name="Update" value="Update" id="">
    </div>
	</div><br><!--panel-body -->   
</form> 
</div>

</div>                     
            	</div><!--/. panel--> 
        	</div>
		</div><!--/.row --> 
	</section>
    
</div>
    <footer class="main-footer">
        <strong>© <a href = "https://iaec-university.tg" class = "footer-link">IAEC University Togo</a> |  All rights reserved 2023 | Design & Developed By <a href="#" class = "footer-link">HR_Rashid Tech.</a></strong>
    </footer>
</div>

<!--Script-->
<?php 
  include('includes/script.php');
  include("includes/Webscript.php");
?>
 <!--/Script-->
</body>
</html>