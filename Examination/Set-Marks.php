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
                <a href="Set-Marks.php" class="nav-link bg-light active">
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
              <li class="breadcrumb-item active">Set-Marks</li>
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
            	<!-- general form elements -->
              	<div class="box box-primary mb-5">
                	<div class="box-header with-border">
                  		<h3 class="box-title ml-2">Set Marks</h3>
                	</div><!-- /.box-header -->
                  	<div class="box-body mb-3">
						        <div class="container">
                      <div class="row">
                        <div class="col-sm-12">
                          <label for="">Insert By</label>
                          <select name="" id="" class="form-control" onchange ="showDivExam('div',this);">
                            <option value="" selected>--Please Choose and option--</option>
                            <option value="Student">Student</option>
                            <option value="Course">Course</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                            <div id ="divStudent" style="display:none">
                              <form action="Student-Marks.php">
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <label for="">Matric Number</label>
                                      <input type="text" name="" placedholder="Enter Matric Number" class="form-control">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <label for="">Level</label>
                                      <select name="" id="" class="form-control">
                                        <option value="" selected>Please Choose an option</option>
                                        <option value="">Level 1</option>
                                        <option value="">Level 2</option>
                                        <option value="">Level 3</option>
                                        <option value="">Level 4</option>
                                        <option value="">Level 5</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <label for="">Semester</label>
                                      <select name="" id="" class="form-control">
                                      <option value="" selected>Please Choose an option</option>
                                        <option value="">First Semester</option>
                                        <option value="">Second Semester</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <label for="">Session</label>
                                      <select name="" id="" class="form-control">
                                      <option value="" selected>Please Choose an option</option>
                                        <option value="">2021/2022</option>
                                        <option value="">2022/2023</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="row mt-3">
                                    <div class="col-sm-12">
                                    <input type="submit" value="Submit" class="btn float-right">
                                    </div>
                                  </div>
                              </form>
                            </div>

                            <div id ="divCourse" style="display:none">
                              <form action="Course-Marks.php">
                                <div class="row">
                                    <div class="col-sm-12">
                                      <label for="">Course</label>
                                      <select data-placeholder="Select a Course..." class="form-control form-control-chosen">
                                          <option value=""></option>
                                          <option value="html">HTML</option>
                                          <option value="css">CSS</option>
                                          <option value="javascript">JavaScript</option>
                                          <option value="python">Python</option>
                                          <option value="html">HTML</option>
                                          <option value="css">CSS</option>
                                          <option value="javascript">JavaScript</option>
                                          <option value="python">Python</option>
                                          <option value="html">HTML</option>
                                          <option value="css">CSS</option>
                                          <option value="javascript">JavaScript</option>
                                          <option value="python">Python</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <label for="">Semester</label>
                                      <select name="" id="" class="form-control">
                                      <option value="" selected>Please Choose an option</option>
                                        <option value="">First Semester</option>
                                        <option value="">Second Semester</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <label for="">Session</label>
                                      <select name="" id="" class="form-control">
                                      <option value="" selected>Please Choose an option</option>
                                        <option value="">2021/2022</option>
                                        <option value="">2022/2023</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="row mt-3">
                                    <div class="col-sm-12">
                                    <input type="submit" value="Submit" class="btn float-right">
                                    </div>
                                  </div>
                              </form>
                            </div>
                        </div>
                      </div><!--/row-->
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