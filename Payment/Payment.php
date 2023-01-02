<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include('../includes/head.php'); ?>
  <link rel="stylesheet" href="../css/Payment.css">
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
            <a href="Payment-Dashboard.php" class="nav-link" >
            <i class="fa-solid fa-gauge"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Payment.php" class="nav-link active bg-light">
            <i class="fa-solid fa-credit-card"></i>
              <p>
                Payment
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Record-Payment.php" class="nav-link">
            <i class="fa-solid fa-book"></i>
              <p>
                Record
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="Payment-Profile.php" class="nav-link">
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
              <li class="breadcrumb-item"><a href="Payment-Dashboard.php" class = "breadcrumb-link">Dashboard</a></li>
              <li class="breadcrumb-item active">Payment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
    	<div class="row">
        	<!-- left column -->
            <div class="col-sm-4 mb-5">
            	<!-- general form elements -->
              	<div class="box box-primary pay-box">
                	<div class="box-header with-border">
                  		<h3 class="box-title heading ml-2">Payment</h3>
                	</div><!-- /.box-header -->
                  	<div class="box-body pay-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group" id="">
                              <label for="" class="heading ml-2">Fee Collection</label>
                              <select name="" id="PayType" onchange ="showDivPay('div',this);" class="form-control col-sm-11 ml-2">
                                <option value="" selected>Please choose an option</option>
                                <option class="" value="Tuition">Tuition Fee</option>
                                <option class="" value="CO">CarryOver/SpillOver Student </option>
                                <option class="" value="Hostel">Hostel Fee</option>
                                <option class="" value="Others">Others Fee</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                              <div class="form-group" id="divTuition" style="display:none">
                                <label for="" class="heading ml-2">Student Type</label>
                                <select name="" id="" onchange ="showDivType('div',this)" class="form-control col-sm-11 ml-2">
                                  <option value="" selected>Please choose an option</option>
                                  <option class="" value="Fresh">Fresh Student</option>
                                  <option class="" value="Returning">Returning Student</option>
                                </select>
                              </div>
                              <div class="form-group" id="divFresh" style="display:none;">
                                  <form role="form" action="Fresh-Payment.php" method="post" id=""> 
                                        <div class="row">
                                          <div class="col-sm-11 ml-2">
                                            <label for="" class="heading">Admission Number</label>
                                            <select data-placeholder="Select  Admission Number..." class="form-control form-control-chosen">
                                                <option value=""></option>
                                               <option value="">82ueuhfu</option>
                                               <option value="">82ueuhfu</option>
                                               <option value="">82ueuhfu</option>
                                               <option value="">82ueuhfu</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-11 ml-2">
                                            <label for="" class="heading ">Semester</label>
                                            <select name="" id="" class="form-control">
                                            <option value="" selected>Please Choose an option</option>
                                              <option value="">First Semester</option>
                                              <option value="">Second Semester</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-11 ml-2">
                                            <label for="" class="heading ">Payment Method</label>
                                            <select name="" id="" class="form-control ">
                                            <option value="" selected>Please Choose an option</option>
                                              <option value="">POS</option>
                                              <option value="">Transfer</option>
                                              <option value="">Cash</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="row mt-3 ">
                                          <div class="col-sm-11 ml-2">
                                          <input type="submit" value="Submit" class="btn float-right">
                                          </div>
                                        </div>
                                  </form> 
                              </div>
                              <div class="form-group" id="divReturning" style="display:none;">
                                  <form role="form" action="Returning-Payment.php" method="post" id=""> 
                                    <label for="" class="heading ml-2">Matric Number</label>
                                    <input type="text" class="form-control col-sm-11 ml-2" id="name" placeholder="Enter Admission Number" name="name" autocomplete="off">
                                    <label for="" class="heading ml-2">Payment Method</label>
                                    <select name="" id="" class="form-control col-11 ml-2">
                                      <option value="">Please choose an option</option>
                                      <option value="">POS</option>
                                      <option value="">Transfer</option>
                                      <option value="">Cash</option>
                                    </select>
                                    <button type="submit" class="btn Submit-btn mt-3 mr-4 float-right" id="">Submit</button>
                                  </form> 
                              </div>
                              <div class="form-group" id="divCO" style="display:none;">
                                <form role="form" action="CarryOver-Payment.php" method="post" id=""> 
                                    <label for="" class="heading ml-2">Matric Number</label>
                                    <input type="text" class="form-control col-sm-11 ml-2" id="name" placeholder="Enter Admission Number" name="name" autocomplete="off">
                                    <label for="" class="heading ml-2">Payment Method</label>
                                    <select name="" id="" class="form-control col-11 ml-2">
                                      <option value="">Please choose an option</option>
                                      <option value="">POS</option>
                                      <option value="">Transfer</option>
                                      <option value="">Cash</option>
                                    </select>
                                    <button type="submit" class="btn Submit-btn mt-2 ml-2" id="">Submit</button>
                                  </form> 
                              </div>
                              <div class="form-group" id="divHostel" style="display:none;">
                                <form role="form" action="Hostel-Payment.php" method="post" id=""> 
                                    <label for="" class="heading ml-2">Admission/Matric Number</label>
                                    <input type="text" class="form-control col-sm-11 ml-2" id="name" placeholder="Enter Admission Number" name="name" autocomplete="off">
                                    <label for="" class="heading ml-2">Semester</label>
                                    <select name="" id="" class="form-control col-11 ml-2">
                                      <option value="">Please choose an option</option>
                                      <option value="">First</option>
                                      <option value="">Second</option>
                                    </select>
                                    <label for="" class="heading ml-2">Payment Method</label>
                                    <select name="" id="" class="form-control col-11 ml-2">
                                      <option value="">Please choose an option</option>
                                      <option value="">POS</option>
                                      <option value="">Transfer</option>
                                      <option value="">Cash</option>
                                    </select>
                                    <label for="" class="heading ml-2">ROOM</label>
                                    <select name="" id="" class="form-control col-11 ml-2">
                                      <option value="">Please choose an option</option>
                                      <option value="">ROOM OF 1</option>
                                      <option value="">ROOM OF 2</option>
                                      <option value="">ROOM OF 3</option>
                                      <option value="">ROOM OF 4</option>
                                    </select>
                                    <button type="submit" class="btn Submit-btn mt-2 ml-2" id="">Submit</button>
                                </form> 
                              </div>
                              <div class="form-group" id="divOthers" style="display:none;">
                                <form role="form" action="Others-Payment.php" method="post" id="" > 
                                    <label for="" class="heading ml-2">Matric Number</label>
                                    <input type="text" class="form-control col-sm-11 ml-2" id="name" placeholder="Enter Admission Number" name="name" autocomplete="off">
                                    <label for="" class="heading ml-2">Payment Method</label>
                                    <select name="" id="" class="form-control col-11 ml-2">
                                      <option value="">Please choose an option</option>
                                      <option value="">POS</option>
                                      <option value="">Transfer</option>
                                      <option value="">Cash</option>
                                    </select>
                                    <button type="submit" class="btn Submit-btn mt-2 ml-2" id="">Submit</button>
                                  </form> 
                              </div>
                              
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
        <strong>© <a href = "https://iaec-university.tg" class = "footer-link"> IAEC University Togo </a>|  All rights reserved 2023 | Design & Developed By <a href="#" class = "footer-link" style = "">HR_Rashid Tech.</a></strong>
    </footer>
</div>
<!--JQuery-->
<script src="../bootstrap5/jquery/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
    $('.form-control-chosen').chosen({
      no_results_text: "Oops, nothing found!",
      width: "25em",
    });
    });
    </script>
<!--Script-->
<?php 
  include('../includes/script.php');
  include("../includes/Webscript.php");
?>
 <!--JQuery-->
</body>
</html>




















