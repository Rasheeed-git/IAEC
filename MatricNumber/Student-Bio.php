<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include('../includes/head.php'); ?>
  <link rel="stylesheet" href="../css/MatricNumber.css">
  <!--for the title it will collect the login name-->
  <!--style-->
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
    <?php 
    include('../includes/Admission-Topbar.php');
    ?>

<div class="content-wrapper">

<!--SideBar-->
<aside class="main-sidebar sidebar-dark-primary bg-dark elevation-10">
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
          <a href="#" class="d-block"> <b class="online"> &#x2022;</b> Online</a>
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
            <a href="Student-Bio.php" class="nav-link active bg-light">
              <i class="fa-solid fa-graduation-cap"></i>
              <p>
                Student's Bio
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
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <section class="content">
    	<div class="row">
        	<!-- left column -->
            <div class="col-sm-3">
            	<!-- general form elements -->
              	<div class="box box-primary">
                	<div class="box-header with-border">
                  		<h3 class="box-title">Student ID</h3>
                	</div><!-- /.box-header -->
                  	<div class="box-body">
						<div class="row align-items-center g-3">

							<div class="col-auto">
                            <label class="visually-hidden" for="inputEmail">Matric Number</label>
                          <input type="text">
								
							</div>

						</div>
                  	</div><!-- /.box-body -->
                  	<div class="box-footer">
                    	<input type="button" class="btn" onclick="showTimeTable(this)" value = "submit"><!--MSK-000108-->
                  	</div>
            	</div><!-- /.box -->
        	</div>
    	</div>
	</section>
    

  <section class="content mt-5 mb-5">
        <div class="row" id="test123">
            <!-- left column -->
            <div class="col-sm-7">
                <!-- general form elements -->
                <div class="box box-primary mb-4">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Teacher</h3>
                    </div><!-- /.box-header -->
                    <!-- form start //MSK-00097-->
                    <form role="form" action="../index.php" method="post" enctype="multipart/form-data" id="form1" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group" id="divFullName">
                                <div class="col-sm-3">
                                    <label>Full Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter full name" name="full_name" id="full_name" autocomplete="off">  
                                </div>                    
                            </div>
                            <div class="form-group" id="divIName">
                                <div class="col-sm-3">
                                    <label>Name With Initials</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter name with initials" name="i_name" id="i_name" autocomplete="off">
                                </div>
                            </div>
                             <div class="form-group" id="divAddress">
                                <div class="col-sm-3">
                                    <label>Address</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter address" name="address" id="address" autocomplete="off"> 
                                </div>                     
                            </div>
                            <div class="form-group" id="divGender">
                                <div class="col-sm-3">
                                    <label>Gender</label>
                                </div>
                                <div class="col-sm-4" id="divGender1">
                                    <select name="gender" class="form-control" id="gender">
                                            <option>Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="divPhone">
                                <div class="col-sm-3">
                                    <label>Phone Number </label>
                                </div>
                                <div class="col-sm-4" id="divPhone1">
                                    <input type="tel" class="form-control" placeholder="123-456-7890" name="phone" id="phone" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group tt2 " id="divEmail">
                                <div class="col-sm-3">
                                    <label>Email</label>
                                </div>
                                <div class="col-sm-6" id="divEmail1">
                                    <input type="text" class="form-control" placeholder="Enter valid email address" name="email" id="email" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group" id="divPhoto">
                                <div class="col-sm-3">
                                    <label>Photo</label>
                                </div>                            
                                <div class="col-sm-3" id="divPhoto1" style="height:150px;">
                                    <img id="output" style="width:130px;height:150px;">
                                    <input type="file" name="fileToUpload" id="fileToUpload" style="margin-top:7px;">
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                          <div class="panel-footer text-right">
                              <input type="button" class="btn" name="Update" value="Update" id="">
                          </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </section>


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