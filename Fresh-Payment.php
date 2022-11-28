<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/iaec-logo.png" type="" width="2px" height= "2px">
    <link rel="stylesheet" type="text/css" href="font/css/all.css">
    <link rel="stylesheet" href="css/PaymentRecord.css">
    <title>Fresh Payment-IAEC University</title>
</head>
<body>

<div class="container" >
    <div class = "row ">
        <div class = "col-sm-12">
         <header>Fresh Payment</header>
            <div class="form-outer">
                <form action="#">
                    <div class="page slide-page">
                        <div class="field">
                            <div class="label">
                            Name
                            </div>
                            <input type="text" readonly>
                        </div>
                        <div class="field">
                            <div class="label">
                                Middle Name(optional)
                            </div>
                            <input type="text" readonly>
                        </div>
                        <div class="field">
                            <div class="label">
                                Surname(Lastname)
                            </div>
                            <input type="text" readonly>
                        </div>
                        <div class="field">
                            <div class="label">
                                Faculty
                            </div>
                            <input type="text" readonly>
                        </div>
                        <div class="field">
                            <div class="label">
                             Department
                            </div>
                            <input type="text" readonly>
                        </div>
                        <div class="field">
                            <div class="label">
                                Level
                            </div>
                            <input type="text" readonly>
                        </div> 
                        <div class="field-1">
                            <div class="label-1">
                                Mode of Entry
                            </div>
                            <input type="text" readonly>
                        </div> 
                        <div class="field-1">
                            <div class="label-1">
                                Semester
                            </div>
                            <select name="" id="faculty" required>
                                <option value="" selected>-----Select Semester-----</option>
                                <option value="1">Summer</option>
                                <option value="2">Spring</option>
                                <option value="3">Fall</option>
                            </select>
                        </div>
                        <div class="field-1">
                            <div class="label-1">
                                Amound Paid
                            </div>
                            <input type="text" required>
                        </div> 
                        <div class="field-1">
                            <div class="label-1">
                                Discount
                            </div>
                            <input type="text">
                        </div> 
                        <div class="field-next">
                            <button type = "submit" class="firstNext">Next</button>
                            <a href="Payment.php" class = "Dashboard-link"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
                        </div>
                  
                </form> 
            </div>
        </div>

    </div>   
</div>

    
</body>
</html>