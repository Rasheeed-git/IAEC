<!DOCTYPE html>
<html lang="en">
<head>
    <!--style-->
  <?php include('../includes/head.php'); ?>
  <link rel="stylesheet" href="../css/Payment.css">
  <title>Receipt-IAEC University</title>
  <!--style-->
</head>
<body>
  
    <section class="invoice">
        <div class="container-fluid p-5 mt-2">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="../Images/iaec-university-logo.png" class="receipt-logo"  alt="" srcset="">
                </div><!--/col-sm-12-->
            </div><!--/row-->
            <div class="row mt-3">
                <div class="col-sm-12">
                    <div class="header text-center">
                        <u><h3 class="w-100"><b>Payment Receipt</b></h3></u>
                    </div>
                    <div class="row">
                        <div class="student-information col-sm-6">
                            <b><p class="m-auto">Name:</b> Haruna Rasheeed</p>
                            <b><p class="m-auto">Matric Number:</b> 0086CSC2122</p>
                            <b><p class="m-auto">Level:</b> 400</p>
                            <b><p class="m-auto">Semester:</b> First Semester</p>
                        </div>
                        <div class="payment-information col-sm-6">
                            <b><p class="m-auto">Date:</b> 28/03/2023</p>
                            <b><p class="m-auto">Receipt Number:</b> 727383883</p>
                            <b><p class="m-auto">Payment-Type:</b> Tuituion Fee</p>
                            <b><p class="m-auto">Academic-Year:</b> 2022-23</p>
                        </div>
                    </div><!--/inner row-->
                </div><!--/col-sm-12-->
            </div><!--/row-->
            <br><br><br>
            <div class="row">
                <div class="col-sm-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Particulars</th>
                                <th colspan="2">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tuituion Fee</td>
                                <td colspan="2">&#x20A6 200,000</td>
                            </tr>
                            <tr>
                                <td>Registration Fee</td>
                                <td colspan="2">&#x20A6 85,000</td>
                            </tr>
                            <tr>
                                <td rowspan="4">Hostel Fee</td>
                                <td>1 IN A ROOM(VIP)</td>
                                <td>&#x20A6 250,000</td>
                            </tr>
                            <tr>
                                <td>2 IN A ROOM</td>
                                <td>&#x20A6 100,000</td>
                            </tr>
                            <tr>
                                <td>3 IN A ROOM</td>
                                <td>&#x20A6 75,000</td>
                            </tr>
                            <tr>
                                <td>4 IN A ROOM</td>
                                <td>&#x20A6 60,000</td>
                            </tr>
                            <tr>
                                <td>Others</td>
                                <td colspan="2">&#x20A6 150,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/col-sm-4-->
                <div class="col-sm-1">

                </div>
                <div class="col-sm-7">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Fee Collection</th>
                                <th>Amount</th>
                                <th>Mode</th>
                            </tr>
                            <tr>
                                <td>Tuituion</td>
                                <td>&#x20A6 50,000</td>
                                <td>POS</td>
                            </tr>
                            <tr>
                                <td>C/O</td>
                                <td>&#x20A6 40,000</td>
                                <td>Cash</td>
                            </tr>
                            <tr>
                                <td>Hostel</td>
                                <td>&#x20A6 70,000</td>
                                <td>Cash</td>
                            </tr>
                            <tr>
                                <td>Others</td>
                                <td>&#x20A6 150,000</td>
                                <td>Transfer</td>
                            </tr>
                            <tr>
                                <td>Tuituion</td>
                                <td>&#x20A6 200,000</td>
                                <td>POS</td>
                            </tr>
                            <tr>
                               <td>Total Fees Received</td>
                               <td colspan="2">&#x20A6 510,000</td> 
                            </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                    </table>
                </div><!--/col-sm-7-->
            </div><!--/row-->
            <div class="row">
                <div class="col-sm-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td colspan="2">Outstanding</td>
                            </tr>
                            <tr>
                                <th>Particulars</th>
                                <th>Amount</th>
                            </tr>
                            <tr>
                                <td>Tuituion Fee</td>
                                <td>&#x20A6 150,000</td>
                            </tr>
                            <tr>
                                <td>C/O Fee</td>
                                <td>&#x20A6 0.00</td>
                            </tr>
                            <tr>
                                <td>Others Fee</td>
                                <td>&#x20A6 150,000</td>
                            </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                    </table>
                </div>
            </div><!--/row-->
            <div class="row mt-5">
                <div class="col-sm-4">
                    <hr class="border border-dark">
                    <p>Student Signature/Date</p>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <hr class="border border-dark">
                    <p>Account Officer Signature & Stamp/Date</p>
                </div>
            </div><!--/row-->
        </div><!--/container-->
    </section>

<?php
    include("../includes/script.php");
?>
</body>
</html>