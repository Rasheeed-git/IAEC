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
            <a href="Payment.php" class="nav-link">
            <i class="fa-solid fa-credit-card"></i>
              <p>
                Payment
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Record-Payment.php" class="nav-link active bg-light">
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
              <li class="breadcrumb-item"><a href="Record-Payment.php" class = "breadcrumb-link">Payment-Record</a></li>
              <li class="breadcrumb-item active">Student Payment Record</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

	</section>
  <section class="content">
    <div class="container">

    
      <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Payment Record</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-2">
                      <div class="row">
                        <div class="col-sm-12">
                          <img src="../Images/Rasheed.png" class="img-thumbnail" alt="" srcset="">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="row">
                                  <div class="student-information col-sm-4">
                                      <b><p class="">Name:</b> Haruna Rasheed</p>
                                      <b><p class="">Matric Number:</b> 0086CSC2122</p>
                                      <b><p class="">Level:</b> 400</p>
                                      <b><p class="">Semester:</b> First Semester</p>
                                  </div>
                                  <div class="payment-information col-sm-8">
                                      <b><p class="">Faculty:</b> FACULTY OF APPLIED SCIENCES AND ENGINEERING</p>
                                      <b><p class="">Department:</b>AGRICULTURAL EXTENSION AND COMMUNICATION TECHNOLOGY</p>
                                      <b><p class="">Academic-Year:</b> 2022-23</p>
                                      <b><p class="">Role:</b> Student</p>
                                  </div>
                              </div><!--/inner row-->
                          </div><!--/col-sm-12-->
                      </div><!--/row-->
                    </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-sm-12">
                        <div class="card card-pink card-outline card-outline-tabs" style="border:none;">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs nav-justified" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-dashboard-tab" data-toggle="pill" href="#custom-tabs-four-dashboard" role="tab" aria-controls="custom-tabs-four-dashboard" aria-selected="true">Dashboard</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-history-tab" data-toggle="pill" href="#custom-tabs-four-history" role="tab" aria-controls="custom-tabs-four-history" aria-selected="false">History</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade active show" id="custom-tabs-four-dashboard" role="tabpanel" aria-labelledby="custom-tabs-four-dashboard-tab">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <table class="table table-bordered">
                                      <thead> 
                                        <tr>
                                          <th colspan="2" class="text-center">Payment Information</th>
                                        </tr>
                                        <tr>
                                          <th>Particulars</th>
                                          <th>Overall</th>
                                        </tr>                                       
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Semester</td>
                                          <td>3</td>
                                        </tr>
                                        <tr>
                                          <td>Tuituion Fee</td>
                                          <td>&#x20A6 426,000</td>
                                        </tr>
                                        <tr>
                                          <td>Registration Fee</td>
                                          <td>&#x20A6 85,000</td>
                                        </tr>
                                        <tr>
                                          <td>Others Fee</td>
                                          <td>&#x20A6 150,000</td>
                                        </tr>
                                        <tr>
                                          <td>Hostel Fee</td>
                                          <td>&#x20A6 0.00</td>
                                        </tr>
                                        <tr>
                                          <td>C/O Fee</td>
                                          <td>&#x20A6 0.00</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="col-sm-6">
                                  <table class="table table-bordered">
                                      <thead> 
                                        <tr>
                                          <th>Particulars</th>
                                          <th>Overall Amount</th>
                                        </tr>                                       
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Amount To Be Paid</td>
                                          <td>&#x20A6 426,000</td>
                                        </tr>
                                        <tr>
                                          <td>Discount Amount</td>
                                          <td>&#x20A6 85,000</td>
                                        </tr>
                                        <tr>
                                          <td>Received Amount</td>
                                          <td>&#x20A6 150,000</td>
                                        </tr>
                                        <tr>
                                          <td>Balance Remain</td>
                                          <td>&#x20A6 0.00</td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" class="text-center">
                                            <a href="Returning-Payment.php" class="form-control bg-pink">Make Payment</a>
                                            <a href="Payment.php" class="w-100 text-pink">Someone else paying?</a>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-history" role="tabpanel" aria-labelledby="custom-tabs-four-history-tab">  
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th style="">#</th>
                                      <th>Date</th>
                                      <th>Fee Collection</th>
                                      <th style="">Amount</th>
                                      <th>Mode</th>
                                      <th>Receipt</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                     <td>1</td>
                                     <td>20-02-2023</td>
                                     <td>Tuituion</td>
                                     <td>&#x20A6 200,000</td>
                                     <td>POS</td>
                                     <td><a href="#" class="btn d-block bg-pink">View</a></td>
                                    </tr>
                                    <tr>
                                     <td>2</td>
                                     <td>10-05-2023</td>
                                     <td>Others</td>
                                     <td>&#x20A6 150,000</td>
                                     <td>Transfer</td>
                                     <td><a href="#" class="btn d-block bg-pink">View</a></td>
                                    </tr>
                                    <tr>
                                     <td>3</td>
                                     <td>20-02-2023</td>
                                     <td>Hostel</td>
                                     <td>&#x20A6 70,000</td>
                                     <td>Cash</td>
                                     <td><a href="#" class="btn d-block bg-pink">View</a></td>
                                    </tr>
                                    <tr>
                                     <td>4</td>
                                     <td>10-05-2023</td>
                                     <td>Tuituion</td>
                                     <td>&#x20A6 150,000</td>
                                     <td>POS</td>
                                     <td><a href="#" class="btn d-block bg-pink">View</a></td>
                                    </tr>
                                    <tr>
                                     <td>5</td>
                                     <td>20-02-2024</td>
                                     <td>C/O</td>
                                     <td>&#x20A6 50,000</td>
                                     <td>Cash</td>
                                     <td><a href="#" class="btn d-block bg-pink">View</a></td>
                                    </tr>
                                    
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>
                      
                    </div><!-- /.col-sm-12 -->
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
          </div>
      </div>
    </div>
  </section>
</div>
    <footer class="main-footer">
        <strong>© <a href = "https://iaec-university.tg" class = "footer-link"> IAEC University Togo </a>|  All rights reserved 2023 | Design & Developed By <a href="#" class = "footer-link" style = "">HR_Rashid Tech.</a></strong>
    </footer>
</div>
<!--JQuery-->

<?php 
  include('../includes/script.php');
  include("../includes/Webscript.php");
?>
 <!--JQuery-->
</body>
</html>