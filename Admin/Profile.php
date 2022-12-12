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
                <a href=".php" class="nav-link">
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
   

    <!-- Main content -->
    <section class="content">

      <div class="row">
       <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="" alt="profile picture">

              <h3 class="profile-username text-center">FullName</h3>

              <p class="text-muted text-center">Role</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">Email</a>
                </li>
                <li class="list-group-item">
                  <b>Contact</b> <a class="pull-right">09039083938</a>
                </li>
                <li class="list-group-item">
                  <b>DOB</b> <a class="pull-right">1998</a>
                </li>
              </ul>
              <button class="btn btn-danger btn-block">Suspend</button>
             
              <button class="btn btn-primary btn-block">Inactive Profile </button>
             
             
               <button class="btn btn-primary btn-block">Unban User ?></button>
              
               
                <a href="#change_image_tab" data-toggle="tab" class="btn btn-primary btn-block"><b>Change Image</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Home</a></li>
                <li><a href="#information" data-toggle="tab">Information</a></li>
              <li><a href="#change_password_tab" data-toggle="tab">Change Password</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
            
                <!-- /.post -->

              </div>
                
                 <!-- /.tab-pane -->
                  <div class="tab-pane" id="information">
               
                      <table class="table table-hover table-bordered">
                          <tr>
                              <th>Name:</th><td>Name</td>
                          </tr>
                           <tr>
                              <th>Class Teacher:</th><td>One</td>
                          </tr>
                           <tr>
                              <th>Gender:</th><td>Male</td>
                          </tr>
                          <tr>
                              <th>Last Login:</th><td>Last login</td>
                          </tr>
                           <tr>
                              <th>Last Activity:</th><td>Last Activity</td>
                          </tr> 
                          <tr>
                              <th>Last Login Attempt:</th><td>Last attempt</td>
                          </tr>
                           <tr>
                              <th>Remember Time:</th><td>Remember Time</td>
                          </tr>
                           <tr>
                              <th>Remember Expire:</th><td>Expire</td>
                          </tr>
                           <tr>
                              <th>IP Address:</th><td>Address</td>
                          </tr>
                           <tr>
                              <th>Login Attempts:</th><td>Login</td>
                          </tr>
                          
                      </table>
              </div>
              
              <!-- /.tab-pane -->
              
              <!-- /.tab-pane -->
              <div class="tab-pane" id="change_password_tab">
                <!-- The timeline -->
            <div class="well">
                      
                      <form class="form-horizontal" id="change_password" name="change_password" method="post">
                 <input type="hidden" name="" value="">
                          <div class="form-group">
                    <label for="new_password" class="col-sm-4 control-label">New Password</label>

                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="new_password" id="new_password" placeholder="**********">
                    </div>
                  </div>
                      <div class="form-group">
                    <label for="confirm_password" class="col-sm-4 control-label">Confirm Password</label>

                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="**********">
                    </div>
                  </div>
                      <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Recent Password</label>

                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="password" id="password" placeholder="**********">
                    </div>
                  </div>
                      <input type="hidden" name="user_id"value="">
                  <div class="form-group">
                      <div class="col-sm-4"> </div>
                    <div class=" col-sm-8 ">
                        
                      <button type="submit" class="btn btn-danger">Change Password</button>
                    </div>
                       
                  </div>
                </form>
                  
                  </div>
                  
              </div>
              <!-- /.tab-pane -->
              

              <div class="tab-pane" id="settings">
                    
                
                  <div class="well">
                      <form class="form-horizontal" name="update_profile" id="update_profile" method="post">
                 <input type="hidden" name="" value="">
                          
                          <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Contact</label>

                    <div class="col-sm-10">
                         <input type="text" name="contact" id="contact"  class="form-control" data-mask="" placeholder=""
                                 >

                    </div>
                  </div>
                  <div class="form-group">
                    <label for="address"  class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" id="address" value="">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                        <input type="password" name="rpassword" class="form-control" id="rpassword" placeholder="********">
                        <input type="hidden" name="user_id" value="">
                    </div>
                  </div>
                
                  <div class="form-group">
                      <div class="col-sm-2"> </div>
                    <div class=" col-sm-10 ">
                        
                      <button type="submit" class="btn btn-danger">update</button>
                    </div>
                       
                  </div>
                </form>
                        
                  </div>
                
                 
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        
         <div class="col-md-3">


          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->




    
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