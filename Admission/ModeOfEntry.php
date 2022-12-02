<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include('../includes/head.php'); ?>
  <link rel="stylesheet" href="../css/ModeOfEntry.css">
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
                  <a href="Admission-Dashboard.php" class="nav-link" >
                  <i class="fa-solid fa-gauge"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="Admission.php" class="nav-link active bg-light">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <p>
                      Admission
                    </p>
                  </a>
                </li>
                
                
                <li class="nav-item">
                  <a href="Admission-Profile.php" class="nav-link" >
                  <i class="fa-solid fa-user"></i>
                    <p>
                      Profile
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="Manages-Admission-Profile.php" class="nav-link">
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
                <li class="breadcrumb-item"><a href="Admission.php" class = "breadcrumb-link">Admission Type</a></li>
                <li class="breadcrumb-item active">Mode of Entry</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <div class="form-box text-center">
          <div class="w-100">
          <h3 class = "header">Mode Of Entry</h3>
              <hr class = "horizontal-line">
              <div id='provisional' class='input-group-provisional'>
                  <a href = "Fresh-Admission.php" class='submit-btn'><b>Fresh</b></a>
                  <div class="dropdown">
                      <button type="button" class="submit-btn dropdown-toggle" data-toggle="dropdown">
                        <b>Direct Entry</b>
                      </button>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="ND-Admission.php">OND/ND</a></li>
                          <li><a class="dropdown-item" href="NCE-Admission.php">NCE</a></li>
                          <li><a class="dropdown-item" href="Advance-Admission.php">Advance OND/ND</a></li>
                          <li><a class="dropdown-item" href="HND-Admission.php">HND</a></li>
                          <li><a class="dropdown-item" href="B.Sc-Admission.php">B.Sc</a></li>
                      </ul>
                  </div>
                  <a href = "Transfer-Admission.php" class='submit-btn'><b>Transfer</b></a>
              </div>
          </div>
      </div>
  </div>
    <footer class="main-footer">
        <strong>© <a href = "https://iaec-university.tg" class = "footer-link">IAEC University Togo</a> |  All rights reserved 2023 | Design & Developed By <a href="#" class = "footer-link" style = "">HR_Rashid Tech.</a></strong>
    </footer>
</div>
<!--JQuery-->

<?php 
  include('../includes/script.php');
  include("../includes/Webscript.php");
?>
 <!--JQuery-->
</body>
</html>
