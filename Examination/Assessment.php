<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include('../includes/head.php'); ?>
  <link rel="stylesheet" href="../css/Exams.css">
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
            <a href="Examination-Dashboard.php" class="nav-link" >
            <i class="fa-solid fa-gauge"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="Assessment.php" class="nav-link bg-light active">
            <i class="fa-solid fa-user-pen"></i>
              <p>
               Set Marks
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Assessment.php" class="nav-link">
              <i class="fa-solid fa-book"></i></i>
              <p>
                Assessment Record
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href=".php" class="nav-link">
              <i class="fa-solid fa-book"></i></i>
              <p>
                Examination Record
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Examination-Profile.php" class="nav-link">
            <i class="fa-solid fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Manage-Examination-Profile.php" class="nav-link">
            <i class="fa-solid fa-pen-to-square"></i>
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
            <div class="col-sm-7">
            	<!-- general form elements -->
              	<div class="box box-primary">
                	<div class="box-header with-border">
                  		<h3 class="box-title">Continue Assessment</h3>
                	</div><!-- /.box-header -->
                  	<div class="box-body">
						<div class="row align-items-center g-3">

							<div class="col-auto">
                            <label class="visually-hidden" for="inputEmail">Matric Number</label>
                            <div class="inputBox1">
                                <input type='text'class='input-field1' id="Name" name = "Name" onkeyup="filter(this)" autocomplete="off" onfocus="this.value=''" required>
                            </div>
                            <ul class="the-dropdown-list" id="therealitems">
                                        <li class="the-dropdown-item">Javascript</li>
                                        <li class="the-dropdown-item">JAVA</li>
                                        <li class="the-dropdown-item">C#</li>
                                        <li class="the-dropdown-item">Python</li>
                                        <li class="the-dropdown-item">Golang</li>
                                        <li class="the-dropdown-item">HTML 5</li>
                                        <li class="the-dropdown-item">CSS</li>
                                        <li class="the-dropdown-item">Ruby</li>
                                        <li class="the-dropdown-item">Scala</li>
                                        <li class="the-dropdown-item">Swift</li>
                                        <li class="the-dropdown-item">Elm</li>
                                        <li class="the-dropdown-item">Rust</li>
                            </ul>
								
							</div>

							<div class="col-auto">
								<label class="visually-hidden" for="inputEmail">Session</label>
								<select name="grade" class="form-control" id="grade"><!--MSK-000107-->
                                    <option>Select Grade</option>

                                    <option value="11">Grade 1</option>

                                    <option value="12">Grade 2</option>

                                    <option value="13">Grade 3</option>
                                </select>
							</div>

							<div class="col-auto">
							<label class="visually-hidden" for="inputPassword">Semester</label>
							<select name="grade" class="form-control" id="grade"><!--MSK-000107-->
                            <option>Select Grade</option>

                                <option value="11">Grade 1</option>

                                <option value="12">Grade 2</option>

                                <option value="13">Grade 3</option>
                            </select>
							</div>

							<div class="col-auto">
							<label class="visually-hidden" for="inputPassword">Level</label>
							<select name="grade" class="form-control" id="grade"><!--MSK-000107-->
                                <option>Select Grade</option>

                                <option value="11">Grade 1</option>

                                <option value="12">Grade 2</option>

                                <option value="13">Grade 3</option>
                            </select>
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


    <section class="content2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-10">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Insert Student's Marks</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 50px">#</th>
                      <th style="width: 150px">Course Code</th>
                      <th>Course Title</th>
                      <th style="width: 100px">C.A <small>30%</small></th>
                      <th style="width: 100px">Exams <small>70%</small></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>CSC440</td>
                      <td>Computer Programming</td>
                      <td><input type="text" name="" id="" style="width:100%" maxlength="5" ></td>
                      <td><input type="text" name="" id="" style="width:100%" maxlength="5" ></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>CSC440</td>
                      <td>Computer Programming</td>
                      <td><input type="text" name="" id="" style="width:100%" maxlength="5" ></td>
                      <td><input type="text" name="" id="" style="width:100%" maxlength="5" ></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>CSC440</td>
                      <td>Computer Programming</td>
                      <td><input type="text" name="" id="" style="width:100%" maxlength="5" ></td>
                      <td><input type="text" name="" id="" style="width:100%" maxlength="5" ></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>CSC440</td>
                      <td>Computer Programming</td>
                      <td><input type="text" name="" id="" style="width:100%" maxlength="5" ></td>
                      <td><input type="text" name="" id="" style="width:100%" maxlength="5" ></td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>CSC440</td>
                      <td>Computer Programming</td>
                      <td><input type="text" name="" id="" style="width:100%" maxlength="5" ></td>
                      <td><input type="text" name="" id="" style="width:100%" maxlength="5" ></td>
                    </tr>
            
              

                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="panel-footer1 text-right mr-3">
                 <input type="button" class="btn " name="Update" value="Submit" id="">
              </div>
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

<!--Script-->
<?php 
  include('../includes/script.php');
  include("../includes/Webscript.php");
?>
 <!--/Script-->
</body>
</html>