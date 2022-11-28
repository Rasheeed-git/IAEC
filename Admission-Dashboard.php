<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include('includes/head.php'); ?>
  <link rel="stylesheet" href="css/Admission-Dashboard.css">
  <!--for the title it will collect the login name-->
  <title>Staff-IAEC University</title>
  <!--style-->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?php 
    include('includes/Admission-Topbar.php');
    ?>

<div class="content-wrapper">


    <?php 
    include('includes/Admission-Sidebar.php');
    ?>
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
              <li class="breadcrumb-item"><a href="HomePage.php" class = "breadcrumb-link">Home</a></li>
              <li class="breadcrumb-item active">Admission-Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="row">
         <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                    Dashboard
                    </h3>
                </div>
            </div>
        </div>
    </div>
    
</div>
    <footer class="main-footer">
        <strong>© IAEC University Togo |  All rights reserved 2023 | Design & Developed By <a href="#" class = "footer-link" style = "">HR_Rashid Tech.</a></strong>
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