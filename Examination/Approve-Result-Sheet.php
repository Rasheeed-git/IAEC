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
                <a href="Course-Marks-Sheet.php" class="nav-link ">
                <i class="fa-sharp fa-solid fa-file-contract"></i>
                  <p>
                    Course Mark's Sheet
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Approve-Result.php" class="nav-link bg-light active">
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
            <li class="breadcrumb-item"><a href="Approve-Result.php" class = "breadcrumb-link">Approve-Result</a></li>
              <li class="breadcrumb-item active">Result-Sheet</li>
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
                  		<h3 class="box-title ml-3">Approve Result</h3>
                        <hr />
                	</div><!-- /.box-header -->
                  	<div class="box-body">
                        <form action="#">
                            <div class="container">
                                <div class="row ml-1">
                                    <div class="col-sm-11">
                                    <input type="submit" value="Publish Result" class="btn form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                  	</div><!-- /.box-body -->
                    
            	</div><!-- /.box -->
        	</div>
    	</div>
	</section>



    <section class="content">
      <div class="container">
        
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                <div class="col-sm-2">
                <div class="dataTables_length" id="example1_length">
                <label>Show entries</label>
                  <select name="example1_length" aria-controls="example1" class="form-control">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select> 
              </div>
                </div>
                <div class="col-sm-8 text-center">
                <h3 class="card-title w-100"></h3>
                <h3 class="w-100">All Courses Result Sheet</h3>
                </div>
                <div class="col-sm-2">
                <div class="card-tools">
                <label>Search</label>
                  <div class="input-group " style="width:11em;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search by Matric No.">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
                </div>
                </div>
               
            


            


              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 50px">S/N</th>
                      <th style="width: 115px">Course Code</th>
                      <th>Course</th>
                      <th style="width: 70px">Registered</th>
                      <th style="width: 70px">Marked</th>
                      <th style="width: 70px">Passed</th>
                      <th style="width: 70px">Failed</th>
                      <th style="width: 140px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>CSC364</td>
                      <td>Web Develeopment</td>
                      <td>74</td>
                      <td>74</td>
                      <td>70</td>
                      <td>4</td>
                      <td> 
                        <a href="#" style="display:inline-block;background-color:grey;color:white" class="btn"><small><i class="fa-solid fa-pen-to-square"></i></small>View Sheet</a>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>CSC364</td>
                      <td>Web Develeopment</td>
                      <td>74</td>
                      <td>74</td>
                      <td>70</td>
                      <td>4</td>
                      <td> 
                        <a href="#" style="display:inline-block;background-color:grey;color:white" class="btn"><small><i class="fa-solid fa-pen-to-square"></i></small>View Sheet</a>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>CSC364</td>
                      <td>Web Develeopment</td>
                      <td>74</td>
                      <td>74</td>
                      <td>70</td>
                      <td>4</td>
                      <td> 
                        <a href="#" style="display:inline-block;background-color:grey;color:white" class="btn"><small><i class="fa-solid fa-pen-to-square"></i></small>View Sheet</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
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