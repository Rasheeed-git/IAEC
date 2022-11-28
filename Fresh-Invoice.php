<!DOCTYPE html>
<html lang="en">
<head>
    <!--style-->
  <?php include('includes/head.php'); ?>
  <link rel="stylesheet" href="css/.css">
  <title>Receipt-IAEC University</title>
  <!--style-->
</head>
<body>
  
<div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12 text-center">
                  <h4 class="w-100">
                    <img src ="Images/iaec-logo.png" type="" width="50px" height= "50px">
                   <b> IAEC UNIVERSITY TOGO</b>
                   <a href="#" class="float-right">Log-out</a>
                  </h4>
                  
                </div>
                <!-- /.col -->
              </div>
              <hr>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-6 invoice-col">
                  <b>Name: </b> Rashid Usman Bello<br>
                  <b>Admission NO.: </b> 0086CSC2021<br>
                  <b>Level: </b> Level 400<br>
                  <b>Semester: </b> Spring<br>
                  <b>Mode Of Entry:</b> Transfer<br>
                  <b>Session: </b> 2021/2022<br>
                  <b>Department </b> Computer science<br>
                  <b>Faculty: </b> Appied science and Engineering<br>
                </div>
                <!-- /.col -->
                <!-- /.col -->
                <div class="col-sm-6 invoice-col">
                  <b>Invoice: 007612</b><br>
                  <b>Payment Date:</b> 2/22/2014<br>
                  <b>Payment Time:</b> 12:43:23pm
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <br>
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Payment ID</th>
                      <th>Date</th>
                      <th>Outstanding Balance</th>
                      <th>Amount Paid</th>
                      <th>Discount</th>
                      <th>Remaining Balance</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>0000000001</td>
                      <td>23/06/2022</td>
                      <td>N 16,000</td>
                      <td>N 6,000</td>
                      <td>N 0.00</td>
                      <td>N 10,000</td>
                    </tr>
                    <tr>
                    <td>0000000002</td>
                      <td>2/06/2022</td>
                      <td>N 20,000</td>
                      <td>N 10,000</td>
                      <td>N 0.00</td>
                      <td>N 10,000</td>
                    </tr>
                    <tr>
                    <td>0000000003</td>
                      <td>3/06/2022</td>
                      <td>N 26,000</td>
                      <td>N 6,000</td>
                      <td>N 0.00</td>
                      <td>N 20,000</td>
                    <tr>
                    <td>0000000004</td>
                      <td>13/06/2022</td>
                      <td>N 36,000</td>
                      <td>N 26,000</td>
                      <td>N 0.00</td>
                      <td>N 10,000</td>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <button onclick="window.print()" rel="noopener" target="_blank" class="btn btn-default float-right"><i class="fas fa-print"></i> Print</button>
                </div>
              </div>
            </div>

            <script>
</script>

<?php
    include("includes/script.php");
?>
</body>
</html>