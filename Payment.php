<!DOCTYPE html>
<html lang="en">
<head>
    <!--style-->
  <?php include('includes/head.php'); ?>
  <link rel="stylesheet" href="css/Payment.css">
  <script src="bootstrap5/jquery/jquery.js"></script>
  <title>Admission-IAEC University</title>
  <!--style-->
</head>
<body class = "full-page">
    <div class = "div-align" >
        <div class="form-box">
            <h3 class = "header">Payment</h3>
            <hr class = "horizontal-line">
            <div id='provisional' class='input-group-provisional'>
                <a href = "" class='submit-btn' data-toggle="modal" data-target="#modal-sm1"><b>Fresh Students'</b></a>
                <a href = "" class='submit-btn' data-toggle="modal" data-target="#modal-sm2"><b>Returning Students'</b></a>
                <a href = "" class='submit-btn' data-toggle="modal" data-target="#modal-sm3"><b>Carryover/Spillover Students'</b></a>
                <a href="Staff-Dashboard.php" class = "Dashboard-link"><i class="fa-solid fa-arrow-left"></i> Go to Dashboard</a>
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
    
<?php
    include("includes/script.php");
    include("includes/Webscript.php");
?>
</body>
</html>