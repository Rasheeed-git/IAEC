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
            <a href="MatricNumber.php" class="nav-link">
            <i class="fa-solid fa-arrow-up-1-9"></i>
              <p>
                Matric Number
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Student.php" class="nav-link active bg-light">
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
            <li class="breadcrumb-item"><a href="Student.php" class = "breadcrumb-link">Student's Bio</a></li>
            <li class="breadcrumb-item active">Student-Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Upload Student Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- form start //MSK-00097-->
                <div class="form-group">
                    <form action="">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="">FirstName</label>
                            <input type="text" class="form-control" readonly>
                          </div>
                          <div class="col-sm-4">
                            <label for="">MiddleName(optional)</label>
                            <input type="text" class="form-control" readonly>
                          </div>
                          <div class="col-sm-4">
                            <label for="">LastName(Surname)</label>
                            <input type="text" class="form-control" readonly>
                          </div>
                        </div><!-- /row -->
                        <div class="row">
                          <div class="col-sm-12">
                            <label for="">Faculty</label>
                            <input type="text" class="form-control" readonly>
                          </div>
                        </div><!-- /row -->
                        <div class="row">
                          <div class="col-sm-8">
                            <label for="">Department</label>
                            <input type="text" class="form-control" readonly>
                          </div>
                          <div class="col-sm-4">
                            <label for="">Matric Number</label>
                            <input type="text" class="form-control" readonly>
                          </div>
                        </div><!-- /row -->
                        <div class="row">
                          <div class="col-sm-8">
                            <label for="">Email</label>
                            <input type="email" class="form-control">
                          </div>
                          <div class="col-sm-4">
                            <label for="">Gender</label>
                            <select name="" id="" class="form-control">
                              <option value="">Please choose an option</option>
                              <option value="">Male</option>
                              <option value="">Female</option>
                            </select>
                          </div>
                        </div><!-- /row -->
                        <div class="row">
                          <div class="col-sm-4">
                            <img id="output" class="img mt-2" alt="" srcset="" style="width:130px;height:150px;">
                            <input type="file" name="fileToUpload" id="fileToUpload" style="margin-top:7px;">
                          </div>
                          <div class="col-sm-8">
                            <div class="row">
                              <div class="col-sm-6">
                                <label for="">Level</label>
                                <input type="text" class="form-control" readonly>
                              </div>
                              <div class="col-sm-6">
                                <label for="">Semester</label>
                                <input type="text" class="form-control" readonly>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <label for="">Session</label>
                                <input type="text" class="form-control" readonly>
                              </div>
                              <div class="col-sm-6">
                                <label for="">Telephone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+000 000 000 0000" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                              </div>
                            </div>
                          </div>
                        </div><!-- /row -->
                      </div><!-- /container-fluid-->
                      <div class="card-footer bg-white">
                        <input type="button" value="Submit" class="btn float-right">
                      </div>
                    </form>
                  </div><!-- /form-group -->
                  
            </div>
              </div>
              <!-- /.card-body -->
              
            <!-- /.card -->
          </div>
          <div class="col-sm-1"></div>
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