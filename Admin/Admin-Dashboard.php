<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include("../includes/head.php"); ?>
  <link rel="stylesheet" href="../css/Admin.css">
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
            <a href="Admission-Dashboard.php" class="nav-link active bg-light" >
            <i class="fa-solid fa-gauge"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-building-columns"></i>
              
              <p>
               Academic
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Profile.php" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Faculty</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=".php" class="nav-link">
                  <i class = "fa fa-edit nav-icon"></i>
                  <p>
                    Deparment
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href=".php" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Courses</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=".php" class="nav-link">
                  <i class="fas fa-address-card nav-icon"></i>
                  <p>Level</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=".php" class="nav-link">
                  <i class="fas fa-address-card nav-icon"></i>
                  <p>Semester</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=".php" class="nav-link">
                  <i class="fas fa-address-card nav-icon"></i>
                  <p>Examination</p>
                </a>
              </li>

            </ul>
          </li>
           

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-users"></i>
              
              <p>
               Staff
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_student.php" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Staff</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="manage_std_form.php" class="nav-link">
                  <i class = "fa fa-edit nav-icon"></i>
                  <p>
                    View Staff
                  </p>
                </a>
              </li>

            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-users"></i>
              
              <p>
               Student
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_student.php" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Student</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="manage_std_form.php" class="nav-link">
                  <i class = "fa fa-edit nav-icon"></i>
                  <p>
                    View Student
                  </p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-cash-register"></i>
              
              <p>
               Accounting Section
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_student.php" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Account 1</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="manage_std_form.php" class="nav-link">
                  <i class = "fa fa-edit nav-icon"></i>
                  <p>
                    Account 2
                  </p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-address-card"></i>
              
              <p>
               Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Profile.php" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>View Profile</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="manage_std_form.php" class="nav-link">
                  <i class = "fa fa-edit nav-icon"></i>
                  <p>
                    Account 2
                  </p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-gear"></i>
              
              <p>
               Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_student.php" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Setting 1</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="manage_std_form.php" class="nav-link">
                  <i class = "fa fa-edit nav-icon"></i>
                  <p>
                    Setting 2
                  </p>
                </a>
              </li>

            </ul>
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
            <p class="m-0">
                Moving left
            </p>
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