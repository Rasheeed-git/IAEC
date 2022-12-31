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
            <a href="MatricNumber.php" class="nav-link active bg-light">
            <i class="fa-solid fa-arrow-up-1-9"></i>
              <p>
                Matric Number
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Student.php" class="nav-link">
            <i class="fa-solid fa-user-tie"></i>
              <p>
                Student
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="Matric-Profile.php" class="nav-link">
            <i class="fa-regular fa-id-card"></i>
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
            <li class="breadcrumb-item"><a href="Matric-Dashboard.php" class = "breadcrumb-link">Dashboard</a></li>
              <li class="breadcrumb-item active">Matric Number</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <section class="content">
    	<div class="row">
        <!-- left column -->
        <div class="col-sm-4">
            <div class="box box-primary pay-box">
              <div class="box-header with-border">
                  <h4 class="box-title heading ml-2">Matric Number</h4>
              </div><!-- /.box-header -->
                <div class="box-body pay-body">
                    <div class="form-group" id="">
                      <form role="form" action="Generate-Matric-Number.php" method="post" id=""> 
                          <label for="" class="heading ml-2">Admission Number</label>
                          <input type="text" class="form-control col-11  ml-2" id="name" placeholder="Enter Admission Number" name="" namecomplete="off" required>
                          <button type="submit" class="btn Submit-btn mt-2 ml-2" id="">Submit</button>
                      </form> 
                    </div>  
                </div><!-- /.box-body -->
            </div><!-- /.box -->
                <!--<div class="box-footer">
                  <input type="button" class="btn" onclick="showTimeTable(this)" value = "submit">
                </div>-->
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