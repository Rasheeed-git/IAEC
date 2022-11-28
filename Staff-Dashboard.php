<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include('includes/head.php'); ?>
  <link rel="stylesheet" href="css/Staff-Dashboard.css">
  <!--for the title it will collect the login name-->
  <title>Staff-IAEC University</title>
  <!--style-->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php 
  include('includes/topbar.php');
?>

<div class="content-wrapper">


<?php 
  include('includes/sidebar.php');
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
              <li class="breadcrumb-item active">Staffs' Dashboard</li>
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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">


          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-success" data-toggle="modal" data-target="#modal-sm1">
              <div class="inner">
               <h4>Admission</h4>
              </div>
              <div class="icon">
              <i class="fa-solid fa-graduation-cap"></i>
              </div>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-sm1"><i class="fa-solid fa-right-to-bracket"></i>Login</a>
            </div>
          </div>
          <!-- ./col -->
         <div class="modal fade" id="modal-sm1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header  text-center">
              <h4 class="modal-title w-100">Admission</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="" action="">

                <div class="form-group">
                <label class="col-sm control-label">Email</label>
                <div class="col-sm">
                    <input type="email" onfocus="this.value=''" class="form-control" name="email" value="" required>
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm control-label">Password</label>
                <div class="col-sm">
                    <input id="password-field11" onfocus="this.value=''" type="password" class="form-control" name="password1" value="" required>
                    <span toggle="#password-field11" id = "admission-show-password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                </div>
                <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Close</button>
              <input type="submit" value="Submit" class="btn btn-login">
            </div>
                </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
   

          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box" id = "payment" data-toggle="modal" data-target="#modal-sm2" >
              <div class="inner">
                <h4>Payment</h4>
              </div>
              <div class="icon">
              <i class="nav-icon fa fa-credit-card"></i>
              </div>
              <a href="" class="small-box-footer" data-toggle="modal" data-target="#modal-sm2"><i class="fa-solid fa-right-to-bracket"></i>Login</a>
            </div>
          </div>

          <div class="modal fade" id="modal-sm2" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100">Payment</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal" method="" action="">

                <div class="form-group">
                <label class="col-sm control-label">Email</label>
                <div class="col-sm">
                    <input type="email" onfocus="this.value=''" class="form-control" name="email" value="" required>
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm control-label">Password</label>
                <div class="col-sm">
                    <input id="password-field22" onfocus="this.value=''" type="password" class="form-control" name="password" value="" required>
                    <span toggle="#password-field22" id = "payment-show-password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                </div>
                <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Close</button>
              <input type="submit" value="Submit" class="btn btn-login">
            </div>
                </form>
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box " id = "matric-no" data-toggle="modal" data-target="#modal-sm3" >
              <div class="inner">
                <h4>Matriculation  Number</h4>
              </div>

              <div class="icon">
              <i class="fa-solid fa-list-ol"></i>
              </div>
              <a href="" class="small-box-footer" data-toggle="modal" data-target="#modal-sm3"><i class="fa-solid fa-right-to-bracket"></i>Login</a>
            </div>
          </div>

        <div class="modal fade" id="modal-sm3" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100">Matriculation Number</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal" method="" action="">

                <div class="form-group">
                <label class="col-sm control-label">Email</label>
                <div class="col-sm">
                    <input type="email" onfocus="this.value=''" class="form-control" name="email" value="" required>
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm control-label">Password</label>
                <div class="col-sm">
                    <input id="password-field33" onfocus="this.value=''" type="password" class="form-control" name="password" value="" required>
                    <span toggle="#password-field33" id = "matric-show-password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                </div>
                <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Close</button>
              <input type="submit" value="Submit" class="btn btn-login">
            </div>
                </form>
            </div>
          
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box" id = "exams" data-toggle="modal" data-target="#modal-sm4" >
              <div class="inner">
             <h4>Examination</h4>
              </div>
              <div class="icon">
              <i class="fa-solid fa-computer"></i>
              </div>
              <a href="" class="small-box-footer" data-toggle="modal" data-target="#modal-sm4"><i class="fa-solid fa-right-to-bracket"></i>Login</a>
            </div>
          </div>

          <!-- ./col -->


          <div class="modal fade" id="modal-sm4" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100">Examination</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal" method="" action="">

                <div class="form-group">
                <label class="col-sm control-label">Email</label>
                <div class="col-sm">
                    <input type="email" onfocus="this.value=''" class="form-control" name="email" value="" required>
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm control-label">Password</label>
                <div class="col-sm">
                    <input id="password-field44" onfocus="this.value=''" type="password" class="form-control" name="password" value="" required>
                    <span toggle="#password-field44" id = "exam-show-password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                </div>
                <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Close</button>
              <input type="submit" value="Submit" class="btn btn-login">
            </div>
                </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
          
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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