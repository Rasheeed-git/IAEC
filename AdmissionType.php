<!DOCTYPE html>
<html lang="en">
<head>
    <!--style-->
  <?php include('includes/head.php'); ?>
  <link rel="stylesheet" href="AdmissionType.css">
  <!--style-->
</head>
<body class = "full-page">
    <div class = "div-align" >
        <div class="form-box">
            <div class='button-box'>
                <div id='btn'></div>
                <button type='button'onclick='admin()'class='toggle-btn'><b>Provisional</b></button>
                <button type='button'onclick='staff()'class='toggle-btn'><b>Perpetual</b></button>
            </div>
            <div id='admin' class='input-group-admin'>
                <a href = "" class='submit-btn'><b>Provisional Admission</b></a>
            </div>

            <form id='staff' class='input-group-staff'>
            <div class="inputBox">
                <input type='text'class='input-field' onfocus="this.value=''" required>
                <b>Admission Number</b>
                <i></i>
            </div>
                <button type='submit'class='submit-btn'><b>Log in</b></button>
            </form>
        </div>
    </div>
        

        <?php
    include("includes/script.php");
    include("includes/HomePagescript.php");
?>
</body>
</html>