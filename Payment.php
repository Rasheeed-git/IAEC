<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include('includes/head.php'); ?>
  <link rel="stylesheet" href="css/Payment.css">
  <!--for the title it will collect the login name-->
  <!--style-->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?php 
    include('includes/Admission-Topbar.php');
    ?>

<div class="content-wrapper">

<!--SideBar-->
<aside class="main-sidebar sidebar-dark-primary elevation-10">
    <!-- Brand Logo -->
    <a href="https://iaec-university.tg" class="brand-link">
      <img src="./Images/iaec-logo.png" alt="IEAC-Logo" class = "logo">
      <span>IAEC University Togo</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-1 d-flex">
        <div class="image">
          <img src="./Images/Mensah.jpg" class="profile-user-img img-fluid img-circle" alt="User-Image">
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
            <a href="Payment-Dashboard.php" class="nav-link" >
            <i class="fa-solid fa-gauge"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Payment.php" class="nav-link active bg-light">
              <i class="fa-solid fa-graduation-cap"></i>
              <p>
                Payment
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="set_fees.php" class="nav-link" data-toggle="modal">
            <i class="fa-solid fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="payment_form.php" class="nav-link" data-toggle="modal">
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
              <li class="breadcrumb-item"><a href="Payment-Dashboard.php" class = "breadcrumb-link">Dashboard</a></li>
              <li class="breadcrumb-item active">Payment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      
    <div class="form-box text-center">
            <h3 class = "header w-100">Payment</h3>
            <hr class = "horizontal-line">
            <div id='provisional' class='input-group-provisional'>
                <a href = "" class='submit-btn' data-toggle="modal" data-target="#modal-sm1"><b>Fresh Student</b></a>
                <a href = "" class='submit-btn' data-toggle="modal" data-target="#modal-sm2"><b>Returning Student</b></a>
                <a href = "" class='submit-btn' data-toggle="modal" data-target="#modal-sm3"><b>Carryover/Spillover Student</b></a>
            </div>
        </div>
    </div>
        

    <!--Modal 1-->
    <div class="modal fade" id="modal-sm1" style="display: none;" aria-hidden="true">
    <div class="form-box2">
        <form id='perpetual' class='input-group-perpetual' action = "index.php" method= "POST">
        <div class="inputBox1">
                <input type='text'class='input-field1' id="Name" name = "Name" onkeyup="filter(this)" autocomplete="off" onfocus="this.value=''" required>
                <b>Name</b>
                <i></i>
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
            <button type='submit' name ="submit" class='submit-btn2'><b>Log in</b></button>
            <a href="" class = "Dashboard-link2"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
        </form>
    </div>
    </div>

    <!--Modal 2-->
    <div class="modal fade" id="modal-sm2" style="display: none;" aria-hidden="true">
    <div class="form-box1">
            <form id='perpetual' class='input-group-perpetual'>
            <div class="inputBox">
                <input type='text'class='input-field' onfocus="this.value=''" required>
                <b>Matriculation Number</b>
                <i></i>
            </div>
                <button type='submit'class='submit-btn' name = "submit"><b>Log in</b></button>
                <a href="" class = "Dashboard-link1"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
            </form>
    </div>
    </div>

      <!--Modal 3-->
      <div class="modal fade" id="modal-sm3" style="display: none;" aria-hidden="true">
    <div class="form-box1">
            <form id='perpetual' class='input-group-perpetual'>
            <div class="inputBox">
                <input type='text'class='input-field' onfocus="this.value=''" required>
                <b>Matriculation Number</b>
                <i></i>
            </div>
                <button type='submit'class='submit-btn' name = "submit"><b>Log in</b></button>
                <a href="" class = "Dashboard-link1"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
            </form>
    </div>
    </div>
    
    
</div>
    <footer class="main-footer">
        <strong>© <a href = "https://iaec-university.tg" class = "footer-link"> IAEC University Togo </a>|  All rights reserved 2023 | Design & Developed By <a href="#" class = "footer-link" style = "">HR_Rashid Tech.</a></strong>
    </footer>
</div>
<!--JQuery-->

<?php 
  include('includes/script.php');
  include("includes/Webscript.php");
?>
 <!--JQuery-->
</body>
</html>




















