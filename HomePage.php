<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/IEACLogo.jpeg" type="" width="2px" height= "2px">
    <title>IAEC UNIVERSITY TOGO</title>
    <link rel="stylesheet" type="text/css" href="font/css/all.css">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="HomePage.css">
</head>
<body>
 <!-- navbar-->
    <nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://iaec-university.tg/"><img src="Images/iaec-university-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <b class="navbar-toggler-icon"></b>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="nav justify-content-center">
            <li class="nav-item">
            <a class="nav-link" href="HomePage.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Students' Portal</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" onclick="document.getElementById('login-form').style.display='block'" href="#">Login</a>
            </li>    
        </ul>
        </div>
    </div>
    </nav>
    <!-- /navbar-->
<div class = "full-page">

<div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='admin()'class='toggle-btn'><b>Admin</b></button>
                    <button type='button'onclick='staff()'class='toggle-btn'><b>Staff</b></button>
                </div>
                <form id='admin' class='input-group-admin'>
                <div class="inputBox">
                    <input type='text'class='input-field' onfocus="this.value=''" required>
				    <b>Email</b>
				    <i></i>
			    </div>
                <div class="inputBox">
                <input type='password'class='input-field' onfocus="this.value=''" name="password" id = "password-field" required>
				    <b>Password</b>
                    <i></i>
                    <span toggle="#password-field" style = "color :rgb(240,0,115)" class="fa fa-fw fa-eye field-icon toggle-password"></span>
			    </div>
                    <input type='checkbox'class='check-box'><span>Remember Password</span>
                    <button type='submit'class='submit-btn'><b>Log in</b></button>
		        </form>

		        <form id='staff' class='input-group-staff'>
                <div class="inputBox">
                    <input type='text'class='input-field' onfocus="this.value=''" required>
				    <b>Email</b>
				    <i></i>
			    </div>
                <div class="inputBox">
                <input type='password'class='input-field' onfocus="this.value=''" name="password1" id = "password-field1" required>
				    <b>Password</b>
				    <i></i>
                    <span toggle="#password-field1" style = "color :rgb(240,0,115)" class="fa fa-fw fa-eye field-icon toggle-password"></span>
			    </div>
                    <input type='checkbox'class='check-box'><span>Remember Password</span>
                    <button type='submit'class='submit-btn'><b>Log in</b></button>
	            </form>
            </div>
        </div>
        
</div>
<?php
    include("includes/script.php");
    include("includes/HomePagescript.php");
?>
</body>
</html>