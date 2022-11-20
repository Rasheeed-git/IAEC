<!DOCTYPE html>
<html lang="en">
<head>
    <!--style-->
  <?php include('includes/head.php'); ?>
  <link rel="stylesheet" href="ModeOfEntry.css">
  <title>Mode Of Entry</title>
  <!--style-->
</head>
<body class = "full-page">
    <div class = "div-align" >
        <div class="form-box">
            <h3 class = "header">Mode Of Entry</h3>
            <hr class = "horizontal-line">
            <div id='provisional' class='input-group-provisional'>
                <a href = "" class='submit-btn'><b>Fresh</b></a>
             <!-- <a href = "" class='submit-btn'><b>Direct Entry</b></a>-->
                <div class="dropdown">
                    <button type="button" class="submit-btn dropdown-toggle" data-toggle="dropdown">
                       <b>Direct Entry</b>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">OND/ND</a></li>
                        <li><a class="dropdown-item" href="#">NCE</a></li>
                        <li><a class="dropdown-item" href="#">Advance OND/ND</a></li>
                        <li><a class="dropdown-item" href="#">HND</a></li>
                        <li><a class="dropdown-item" href="#">B.Sc</a></li>
                    </ul>
                </div>
                <a href = "" class='submit-btn'><b>Transfer</b></a>
                <a href="StaffPage.php" class = "Dashboard-link"><i class="fa-solid fa-arrow-left"></i> Go to Dashboard</a>
            </div>
        </div>
    </div>
        

        <?php
    include("includes/script.php");
    include("includes/Webscript.php");
?>
</body>
</html>