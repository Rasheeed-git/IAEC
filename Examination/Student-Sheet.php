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
                <a href="Set-Grade.php" class="nav-link">
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
                <a href="Student-Marks-Sheet.php" class="nav-link bg-light active">
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
            <li class="breadcrumb-item"><a href="Student-Marks-Sheet.php" class = "breadcrumb-link">Student-Marks-Sheet</a></li>
              <li class="breadcrumb-item active">Student-Sheet</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <label for=""></label>  Haruna Usman Bello <br>
                <label for="">Matric No.: </label> 0086CSC2122<br>
                <label for="">Level: </label> 300 <br>
            </div>
            <div class="col-sm-6">
                <label for="">Session: </label> 2021/2022<br>
                <label for="">Semester: </label> Second<br>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Mark's Sheet</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 50px">S/N</th>
                      <th style="width: 150px">Course Code</th>
                      <th>Course Title</th>
                      <th style="width: 105px">Credit Unit</th>
                      <th style="width: 100px">Marks</th>
                      <th style="width: 100px">Grade</th>
                      <th style="width: 100px">Point</th>
                      <th style="width: 100px">Result</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>CSC440</td>
                      <td>Computer Programming</td>
                      <td>3</td>
                      <td>92</td>
                      <td>A</td>
                      <td>4.00</td>
                      <td>Pass</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>CSC440</td>
                      <td>Web Programming</td>
                      <td>3</td>
                      <td>88</td>
                      <td>A-</td>
                      <td>3.67</td>
                      <td>Pass</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>CSC440</td>
                      <td>Compiler Design</td>
                      <td>3</td>
                      <td>90</td>
                      <td>A</td>
                      <td>4.00</td>
                      <td>Pass</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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