<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include('../includes/head.php'); ?>
  <link rel="stylesheet" href="../css/Admission.css">
  <!--for the title it will collect the login name-->
  <!--style-->
</head>
<body class="hold-transition layout-navbar-fixed sidebar-mini layout-fixed">
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
            <a href="Admission-Dashboard.php" class="nav-link" >
            <i class="fa-solid fa-gauge"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Admission.php" class="nav-link">
              <i class="fa-solid fa-graduation-cap"></i>
              <p>
                Admission
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
          <a href="Admission-Profile.php" class="nav-link bg-light active">
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
            <li class="breadcrumb-item"><a href="Admission-Dashboard.php" class = "breadcrumb-link">Dashboard</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- Main content -->
 <section class="content">

<div class="row">
  <div class="col-sm-4">

    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile box-body-white">
          <img class="profile-user-img img-responsive img-circle mt-4 mx-auto d-block" src="../Images/Mensah.jpg"  alt="profile picture">

        <h3 class="profile-username text-center">Jean Hermann Mensah</h3>

        <p class="text-muted text-center">Registrar IAEC University Togo</p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b class="ml-2">Email:</b> <a class="float-right mr-2">Harunarrasheeed@gmail.com</a>
          </li>
          <li class="list-group-item">
            <b class="ml-2">Contact:</b> <a class="float-right mr-2">09039083938</a>
          </li>
          <li class="list-group-item">
            <b class="ml-2">DOB:</b> <a class="float-right mr-2">1998</a>
          </li>
        </ul>
        <button class="btn  btn-block" id="changeprofile" onclick="document.getElementById('profilepicture').click()">Change Profile Picture</button>
        <input type="file" name="profile" id="profilepicture" class="profile-picture" accept="image/*">
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </div>
  <!-- /.col-sm4 -->

  <div class="col-sm-1">

  </div>
  <!--col-sm-1-->

  <div class="col-sm-7">
      <div class="card card-pink card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
          <ul class="nav nav-tabs nav-justified" id="custom-tabs-four-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Settings</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-four-tabContent">
            <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
            </div>
            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                <table class="table table-hover table-bordered">
                  <tr>
                      <th class="table">Full Name:</th><td>Full Name</td>
                  </tr>
                    <tr>
                      <th class="table">User Name:</th><td>User</td>
                  </tr>
                    <tr>
                      <th class="table">Gender:</th><td>Male</td>
                  </tr>
                  <tr>
                      <th class="table">Email:</th><td>Email@email.com</td>
                  </tr>
                    <tr>
                      <th class="table">Phone Number:</th><td>9999999999</td>
                  </tr> 
                  <tr>
                      <th class="table">Address:</th><td>Address</td>
                  </tr>
                    <tr>
                      <th class="table">Role:</th><td>Admission Staff</td>
                  </tr>
                  
                </table>
                  
            </div>
            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
            
                    <!-- The timeline -->
                <div class="well">
                          
                    <form class="form-horizontal" id="change_password" name="change_password" method="post">
                       <input type="hidden" name="" value="">
                        <div class="form-group">
                          <div class="row">
                              <div class="col-sm-3">
                                <label for="" class="control-label ml-2 mt-3">Old Password</label>
                              </div>
                              <div class="col-sm-6">
                                <input type="password" class="form-control mt-3" name="old_password" id="old_password" placeholder="**********">
                              </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                              <div class="col-sm-3">
                                <label for="" class="control-label ml-2 mt-3">New Password</label>
                              </div>
                              <div class="col-sm-6">
                                <input type="password" class="form-control mt-3" name="" id="" placeholder="**********">
                              </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                              <div class="col-sm-3">
                                <label for="" class="control-label ml-2 mt-3">Confirm Password</label>
                              </div>
                              <div class="col-sm-6">
                                <input type="password" class="form-control mt-3" name="confirm_password" id="confirm_password" placeholder="**********">
                              </div>
                          </div>
                        </div>
                        

                      <div class="form-group">
                        <div class="col-sm-4"> 

                        </div>
                        <div class=" col-sm-8 ">
                            
                          <button type="submit" class="btn mb-3" id="changepassword">Change Password</button>
                        </div>
                          
                      </div>
                    </form>
                      
                  </div>
            </div>
            <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
              <div class="well">
                <form class="form-horizontal" name="update_profile" id="update_profile" method="post">
                  <input type="hidden" name="" value="">
                          
                        <div class="form-group">
                          <div class="row">
                              <div class="col-sm-3">
                                <label for="" class="control-label ml-2 mt-3">User Name</label>
                              </div>
                              <div class="col-sm-6">
                                <input type="Text" class="form-control mt-3" name="" id="" placeholder="**********">
                              </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                              <div class="col-sm-3">
                                <label for="" class="control-label ml-2 mt-3">Email</label>
                              </div>
                              <div class="col-sm-6">
                                <input type="email" class="form-control mt-3" name="" id="" placeholder="**********">
                              </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                              <div class="col-sm-3">
                                <label for="" class="control-label ml-2 mt-3">Contact</label>
                              </div>
                              <div class="col-sm-6">
                                <input type="tel" class="form-control mt-3" name="" id="" placeholder="**********">
                              </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                              <div class="col-sm-3">
                                <label for="" class="control-label ml-2 mt-3">Password</label>
                              </div>
                              <div class="col-sm-6">
                              <input type="password" class="form-control" name="" id="password-show" value="password" readonly>
                      <span toggle="#password-show" id = "admission-show-password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                              </div>
                          </div>
                        </div>

                
                  <div class="form-group">
                    <div class="col-sm-4"> </div>
                    <div class=" col-sm-8 ">
                        
                      <button type="submit" class="btn mb-3" id="update">Update</button>
                    </div>
                      
                  </div>
                </form>
                  
              </div>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
    
  </div><!-- /.col-sm-7 -->

</div><!-- /.row -->
</section><!-- /.section content -->
    
    
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