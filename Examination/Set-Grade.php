<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include('../includes/head.php'); ?>
  <link rel="stylesheet" href="../css/Exams.css">
  <!--for the title it will collect the login name-->
  <!--style-->
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
    <?php 
    include('../includes/Admission-Topbar.php');
    ?>

<div class="content-wrapper ">

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
            <a href="Examination-Dashboard.php" class="nav-link" >
            <i class="fa-solid fa-gauge"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-book"></i></i>
              <p>
                Examination
              </p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Set-Marks.php" class="nav-link ">
                <i class="fa-solid fa-user-pen"></i>
                  <p>
                  Set Marks
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Set-Grade.php" class="nav-link bg-light active">
                <i class="fa-solid fa-file-pen"></i>
                  <p>Set Grade</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Grade-Info.php" class="nav-link">
                <i class="fa-solid fa-file-lines"></i>
                  <p>
                    All Grade Info
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Student-Marks-Sheet.php" class="nav-link">
                <i class="fa-sharp fa-solid fa-file-contract"></i>
                  <p>
                    Students Mark's Sheet
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Student-Result.php" class="nav-link">
                <i class="fa-sharp fa-solid fa-file-contract"></i>
                  <p>
                    Students Result
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Course-Marks-Sheet.php" class="nav-link">
                <i class="fa-sharp fa-solid fa-file-contract"></i>
                  <p>
                    Course Mark's Sheet
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Approve-Result.php" class="nav-link">
                <i class="fa-solid fa-file-circle-check"></i>
                  <p>
                    Approve Result Sheet
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Pending-Marks-Sheet.php" class="nav-link">
                <i class="fa-solid fa-file-circle-xmark"></i>
                  <p>
                    Pending Mark's Sheet
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="Examination-Profile.php" class="nav-link">
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
            <li class="breadcrumb-item"><a href="Examination-Dashboard.php" class = "breadcrumb-link">Dashboard</a></li>
              <li class="breadcrumb-item active">Set-Grade</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
    	<div class="row">
        	<!-- left column -->
            <div class="col-sm-6">
            	<!-- general form elements -->
              	<div class="box box-primary mb-5">
                	<div class="box-header with-border">
                  		<h3 class="box-title ml-2">Set Grade</h3>
                	</div><!-- /.box-header -->
                  	<div class="box-body mb-3">
						        <div class="container">
                      <div class="row">
                        <div class="col-sm-11">
                          <label for="">Grade Name</label>
                          <input type="text" class="form-control" placeholder="Grade name like A+, A, A-, or B">
                          <label for="">Grade Point</label>
                          <input type="text" class="form-control" placeholder="Grade Point like 4.00, 3.67, 3.33, or 3.00">
                          <label for="">Marks From</label>
                          <input type="text" class="form-control" placeholder="Grade marks area start marks like 90-100 so give 90">
                          <label for="">Marks To</label>
                          <input type="text" class="form-control" placeholder="Grade marks area end marks like 90-100 so give 100">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-11">
                          <input type="submit" value="Add Grade" class="btn float-right mt-3">
                        </div>
                      </div>
                    </div>
                  	</div><!-- /.box-body -->
                    
            	</div><!-- /.box -->
        	</div>
    	</div>
	</section>


     	

</div>
    <footer class="main-footer">
        <strong>© <a href = "https://iaec-university.tg" class = "footer-link">IAEC University Togo</a> |  All rights reserved 2023 | Design & Developed By <a href="#" class = "footer-link">HR_Rashid Tech.</a></strong>
    </footer>
</div>

<script src="../bootstrap5/jquery/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
    $('.form-control-chosen').chosen({
      no_results_text: "Oops, nothing found!",
      width: "23em",
    });
    });
    </script>
<!--Script-->
<?php 
  include('../includes/script.php');
  include("../includes/Webscript.php");
?>
 <!--/Script-->
</body>
</html>