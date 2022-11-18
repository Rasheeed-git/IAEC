<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAEC UNIVERSITY TOGO</title>
    <link rel="stylesheet" type="text/css" href="font/css/all.css">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="HomePage.css">
</head>
<body>
<div class="full-page">
        <div class="navbar">
                    <div>
                        <a href='#'><img src = "Images/iaec-university-logo.png"></a>
                    </div>
                    <nav>
                        <ul id='MenuItems'>
                            <li><a href='#'>Home</a></li>
                            <li><a href='#'>Students' Portal</a></li>
                            <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                        </ul>
                    </nav>
        </div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='admin()'class='toggle-btn'>Admin</button>
                    <button type='button'onclick='staff()'class='toggle-btn'>Staff</button>
                </div>
                <form id='admin' class='input-group-admin'>
                    <input type='text'class='input-field'placeholder='Email Id' required >
                    <input type='password'class='input-field'placeholder='Enter Password' required>
                    <input type='checkbox'class='check-box'><span>Remember Password</span>
                    <button type='submit'class='submit-btn'>Log in</button>
		        </form>
		        <form id='staff' class='input-group-staff'>
                    <input type='text'class='input-field'placeholder='Email Id' required >
                    <input type='password'class='input-field'placeholder='Enter Password' required>
                    <input type='checkbox'class='check-box'><span>Remember Password</span>
                    <button type='submit'class='submit-btn'>Log in</button>
	            </form>
            </div>
        </div>
    </div>

<!--script-->

</body>
</html>