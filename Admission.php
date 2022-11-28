<!DOCTYPE html>
<html lang="en">
<head>
    <!--style-->
  <?php include('includes/head.php'); ?>
  <link rel="stylesheet" href="css/Admission.css">
  <title>Admission-IAEC University</title>
  <!--style-->
</head>
<body class = "full-page">
    <div class = "div-align" >
        <div class="form-box">
        <img src="Images/iaec-university-logo.png" alt="IAEC LOGO">
            <hr class = "horizontal-line">
            <div class='button-box'>
                <div id='btn'></div>
                <button type='button'onclick='provisional()'class='toggle-btn'><b>Provisional</b></button>
                <button type='button'onclick='perpetual()'class='toggle-btn'><b>Perpetual</b></button>
            </div>
            <div id='provisional' class='input-group-provisional'>
                <a href = "ModeOfEntry.php" class='submit-btn' id = "provisional-btn"><b>Provisional Admission</b></a>
                <a href="Staff-Dashboard.php" class = "Dashboard-link"><i class="fa-solid fa-arrow-left"></i> Go to Dashboard</a>
            </div>

            <form id='perpetual' class='input-group-perpetual'>
            <div class="inputBox">
                <input type='text'class='input-field' onfocus="this.value=''" required>
                <b>Admission Number</b>
                <i></i>
            </div>
                <button type='submit'class='submit-btn'><b>Log in</b></button>
                <a href="Staff-Dasboard.php" class = "Dashboard-link"><i class="fa-solid fa-arrow-left"></i> Go to Dashboard</a>
            </form>
        </div>
    </div>
        

        <?php
    include("includes/script.php");
    include("includes/Webscript.php");
?>
</body>
</html>