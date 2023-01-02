<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include('../includes/head.php'); ?>
  <link rel="stylesheet" href="../css/Admission.css">
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
            <a href="Admission-Dashboard.php" class="nav-link" >
            <i class="fa-solid fa-gauge"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Admission.php" class="nav-link bg-light active">
              <i class="fa-solid fa-graduation-cap"></i>
              <p>
                Admission
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
          <a href="Admission-Profile.php" class="nav-link">
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
              <li class="breadcrumb-item active">Admission-Type</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   

      <section class="content">
    	  <div class="row">
          
        	<!-- left column -->
            	<!--Starting-->	
           <div class="col-sm-5">
           <div class="box-header">
            <h4 class="heading">Provide Admission</h4>
          </div>
              <div class="card card-pink card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                  <ul class="nav nav-tabs nav-justified" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Provisional Admission</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Perpetual Admission</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                <div class="box-body">
                                  <div class="form-group" id="divGrade">
                                      <label for="" class="heading">Mode Of Entry</label>
                                      <select name="EntryMode" id="EntryMode" class="form-control">
                                        <option value="" selected>Please choose an option</option>
                                        <option class="option" value="Fresh"><a href="Fresh.php">Fresh</a></option>
                                        <option class="option" value="directentry">Direct Entry</option>
                                        <option class="option" value="Transfer"><a href="Transfer.php">Transfer</a></option>
                                      </select>
                                    </div>

                                    <div class="form-group EntryMode" id="Showdirectentry" style="display:none">
                                      <label for="" class="heading">Direct Entry</label>
                                      <select name="" id="EntryMode1" class="form-control">
                                        <option value="" selected>Please choose an option</option>
                                        <option class="option" value="ND" ><a href="ND-Admission.php">National/Ordinary Diploma (ND/OND)</a> </option>
                                        <option class="option" value="NCE" ><a href="NCE-Admission">Nigerian Certificate of Education (NCE)</a> </option>
                                        <option class="option" value="AND" ><a href="Advance-Admission">Advance National/Ordinary Diploma (ND/OND)</a> </option>
                                        <option class="option" value="HND" ><a href="HND-Admission">Higher National Diploma (HND)</a> </option>
                                        <option class="option" value="BSC" ><a href="B.Sc-Admission">Bachelor of Science/Technology (B.Sc/B.Tech)</a> </option>
                                      </select>
                                    </div>
                                      
                                </div><!-- /.box-body -->
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <!-- general form elements -->
                            <form role="form" action="../index.php" method="post" id="form1">                    
                                <div class="box-body">
                                  <div class="form-group" id="divGrade">
                                      <label for="" class="heading">Admission Number</label>
                                      <select data-placeholder="Select Admission Number..." class="form-control form-control-chosen">
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
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                  <input type="hidden" name="do" value="add_grade">
                                  <button type="submit" class="btn float-right" id="btnSubmit">Submit</button>
                                </div>
                            </form>  
                    </div>
                    
                  </div><!--tab-content-->
                </div>  <!-- /.card --> 
              </div>
            
          </div><!-- /.col-sm-12 -->

          <!--Ending-->
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