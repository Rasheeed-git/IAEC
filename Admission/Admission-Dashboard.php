<!DOCTYPE html>
<html lang="en">
<head>
  <!--style-->
  <?php include("../includes/head.php"); ?>
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
<aside class="main-sidebar  sidebar-dark-primary bg-dark elevation-10">
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
            <a href="Admission-Dashboard.php" class="nav-link bg-light active" >
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
            <h3 class="m-0">
              Session: 2022/2023
            </h3>
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
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <h4>Provisional Admission</h4>
              </div>
              <div class="icon">
              <i class="fa-solid fa-graduation-cap"></i>
              </div>
              <a href="#" class="small-box-footer">Number of Provisional Admission</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-12 col-md-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <h4>Perpectual Admission</h4>
              </div>
              <div class="icon">
              <i class="fa-solid fa-graduation-cap"></i>
              </div>
              <a href="#" class="small-box-footer">Number of Perpectual Admission</a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
    <div class="row">
      <div class="col-sm-12 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><i class="fa-solid fa-clock"></i> News & Events</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                your news and events will appear here
                </div>
                <!-- /.card-body -->
              </div>
      </div>
          
      <div class="col-sm-12 col-md-6">
            
                  <div class="card bg-gradient-light">
                      <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                        <h3 class="card-title">
                          <i class="far fa-calendar-alt"></i>
                          Calendar
                        </h3>
                        <!-- tools card -->
                        <div class="card-tools">
                          <!-- button with a dropdown -->
                          <div class="btn-group">
                            <button type="button"  class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                              <i class="fas fa-bars"></i>
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a href="#" class="dropdown-item">Add new event</a>
                              <a href="#" class="dropdown-item">Clear events</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item">View calendar</a>
                            </div>
                          </div>
                          <button type="button" class="btn btn-sm" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /. tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body pt-0">
                        <!--The calendar -->
                        <div id="calendar">
                        <div class="bootstrap-datetimepicker-widget usetwentyfour">
                          <ul class="list-unstyled">
                            <li class="show"><div class="datepicker">
                              <div class="datepicker-days" style="">
                                <table class="table table-sm">
                                  <thead>
                                    <tr>
                                      <th class="prev" data-action="previous">
                                        <span class="fa fa-chevron-left" title="Previous Month"></span>
                                      </th>
                                      <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">December 2022
                                      </th>
                                      <th class="next" data-action="next">
                                        <span class="fa fa-chevron-right" title="Next Month"></span>
                                      </th>
                                    </tr>
                                    <tr>
                                      <th class="dow">Su</th>
                                      <th class="dow">Mo</th>
                                      <th class="dow">Tu</th>
                                      <th class="dow">We</th>
                                      <th class="dow">Th</th>
                                      <th class="dow">Fr</th>
                                      <th class="dow">Sa</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td data-action="selectDay" data-day="11/27/2022" class="day old weekend">27</td>
                                      <td data-action="selectDay" data-day="11/28/2022" class="day old">28</td>
                                      <td data-action="selectDay" data-day="11/29/2022" class="day old">29</td>
                                      <td data-action="selectDay" data-day="11/30/2022" class="day old">30</td>
                                      <td data-action="selectDay" data-day="12/01/2022" class="day">1</td>
                                      <td data-action="selectDay" data-day="12/02/2022" class="day">2</td>
                                      <td data-action="selectDay" data-day="12/03/2022" class="day weekend">3</td>
                                    </tr>
                                    <tr>
                                      <td data-action="selectDay" data-day="12/04/2022" class="day weekend">4</td>
                                      <td data-action="selectDay" data-day="12/05/2022" class="day">5</td>
                                      <td data-action="selectDay" data-day="12/06/2022" class="day">6</td>
                                      <td data-action="selectDay" data-day="12/07/2022" class="day">7</td>
                                      <td data-action="selectDay" data-day="12/08/2022" class="day">8</td>
                                      <td data-action="selectDay" data-day="12/09/2022" class="day">9</td>
                                      <td data-action="selectDay" data-day="12/10/2022" class="day weekend">10</td>
                                    </tr>
                                    <tr>
                                      <td data-action="selectDay" data-day="12/11/2022" class="day weekend">11</td>
                                      <td data-action="selectDay" data-day="12/12/2022" class="day active today">12</td>
                                      <td data-action="selectDay" data-day="12/13/2022" class="day">13</td>
                                      <td data-action="selectDay" data-day="12/14/2022" class="day">14</td>
                                      <td data-action="selectDay" data-day="12/15/2022" class="day">15</td>
                                      <td data-action="selectDay" data-day="12/16/2022" class="day">16</td>
                                      <td data-action="selectDay" data-day="12/17/2022" class="day weekend">17</td>
                                    </tr>
                                    <tr>
                                      <td data-action="selectDay" data-day="12/18/2022" class="day weekend">18</td>
                                      <td data-action="selectDay" data-day="12/19/2022" class="day">19</td>
                                      <td data-action="selectDay" data-day="12/20/2022" class="day">20</td>
                                      <td data-action="selectDay" data-day="12/21/2022" class="day">21</td>
                                      <td data-action="selectDay" data-day="12/22/2022" class="day">22</td>
                                      <td data-action="selectDay" data-day="12/23/2022" class="day">23</td>
                                      <td data-action="selectDay" data-day="12/24/2022" class="day weekend">24</td>
                                    </tr>
                                    <tr>
                                      <td data-action="selectDay" data-day="12/25/2022" class="day weekend">25</td>
                                      <td data-action="selectDay" data-day="12/26/2022" class="day">26</td>
                                      <td data-action="selectDay" data-day="12/27/2022" class="day">27</td>
                                      <td data-action="selectDay" data-day="12/28/2022" class="day">28</td>
                                      <td data-action="selectDay" data-day="12/29/2022" class="day">29</td>
                                      <td data-action="selectDay" data-day="12/30/2022" class="day">30</td>
                                      <td data-action="selectDay" data-day="12/31/2022" class="day weekend">31</td>
                                    </tr>
                                    <tr>
                                      <td data-action="selectDay" data-day="01/01/2023" class="day new weekend">1</td>
                                      <td data-action="selectDay" data-day="01/02/2023" class="day new">2</td>
                                      <td data-action="selectDay" data-day="01/03/2023" class="day new">3</td>
                                      <td data-action="selectDay" data-day="01/04/2023" class="day new">4</td>
                                      <td data-action="selectDay" data-day="01/05/2023" class="day new">5</td>
                                      <td data-action="selectDay" data-day="01/06/2023" class="day new">6</td>
                                      <td data-action="selectDay" data-day="01/07/2023" class="day new weekend">7</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <div class="datepicker-months" style="display: none;">
                              <table class="table-condensed">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous">
                                      <span class="fa fa-chevron-left" title="Previous Year"></span>
                                    </th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2022</th>
                                    <th class="next" data-action="next">
                                      <span class="fa fa-chevron-right" title="Next Year"></span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td colspan="7">
                                      <span data-action="selectMonth" class="month">Jan</span>
                                      <span data-action="selectMonth" class="month">Feb</span>
                                      <span data-action="selectMonth" class="month">Mar</span>
                                      <span data-action="selectMonth" class="month">Apr</span>
                                      <span data-action="selectMonth" class="month">May</span>
                                      <span data-action="selectMonth" class="month">Jun</span>
                                      <span data-action="selectMonth" class="month">Jul</span>
                                      <span data-action="selectMonth" class="month">Aug</span>
                                      <span data-action="selectMonth" class="month">Sep</span>
                                      <span data-action="selectMonth" class="month">Oct</span>
                                      <span data-action="selectMonth" class="month">Nov</span>
                                      <span data-action="selectMonth" class="month active">Dec</span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="datepicker-years" style="display: none;">
                            <table class="table-condensed">
                              <thead>
                                <tr>
                                  <th class="prev" data-action="previous">
                                    <span class="fa fa-chevron-left" title="Previous Decade"></span>
                                  </th>
                                  <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th>
                                  <th class="next" data-action="next">
                                    <span class="fa fa-chevron-right" title="Next Decade"></span>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td colspan="7">
                                    <span data-action="selectYear" class="year old">2019</span>
                                    <span data-action="selectYear" class="year">2020</span>
                                    <span data-action="selectYear" class="year">2021</span>
                                    <span data-action="selectYear" class="year active">2022</span>
                                    <span data-action="selectYear" class="year">2023</span>
                                    <span data-action="selectYear" class="year">2024</span>
                                    <span data-action="selectYear" class="year">2025</span>
                                    <span data-action="selectYear" class="year">2026</span>
                                    <span data-action="selectYear" class="year">2027</span>
                                    <span data-action="selectYear" class="year">2028</span>
                                    <span data-action="selectYear" class="year">2029</span>
                                    <span data-action="selectYear" class="year old">2030</span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="datepicker-decades" style="display: none;">
                          <table class="table-condensed">
                            <thead>
                              <tr>
                                <th class="prev" data-action="previous">
                                  <span class="fa fa-chevron-left" title="Previous Century"></span>
                                </th>
                                <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th>
                                <th class="next" data-action="next">
                                  <span class="fa fa-chevron-right" title="Next Century"></span>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td colspan="7">
                                  <span data-action="selectDecade" class="decade old" data-selection="2006">1990</span>
                                  <span data-action="selectDecade" class="decade" data-selection="2006">2000</span>
                                  <span data-action="selectDecade" class="decade" data-selection="2016">2010</span>
                                  <span data-action="selectDecade" class="decade active" data-selection="2026">2020</span>
                                  <span data-action="selectDecade" class="decade" data-selection="2036">2030</span>
                                  <span data-action="selectDecade" class="decade" data-selection="2046">2040</span>
                                  <span data-action="selectDecade" class="decade" data-selection="2056">2050</span>
                                  <span data-action="selectDecade" class="decade" data-selection="2066">2060</span>
                                  <span data-action="selectDecade" class="decade" data-selection="2076">2070</span>
                                  <span data-action="selectDecade" class="decade" data-selection="2086">2080</span>
                                  <span data-action="selectDecade" class="decade" data-selection="2096">2090</span>
                                  <span data-action="selectDecade" class="decade old" data-selection="2106">2100</span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </li>
                    <li class="picker-switch accordion-toggle"></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>

      </div> <!-- /.col -->
    </div>  <!-- /.row -->

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