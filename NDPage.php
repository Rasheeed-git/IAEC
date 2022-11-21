<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/iaec-logo.png" type="" width="2px" height= "2px">
    <link rel="stylesheet" type="text/css" href="font/css/all.css">
    <link rel="stylesheet" href="FreshPage.css">
    <title>OND/ND Students' Page</title>
</head>
<body>

<div class="container" >
    <div class = "row ">
        <div class = "col-sm-12">
         <header>OND/ND Entry Requirements</header>
         <div class="progress-bar">
            <div class="step">
               <p>
                  Personal Information
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                Upload Documents
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Complete
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            </div>
            <div class="form-outer">
                <form action="#">
                    <div class="page slide-page">
                        <div class="field">
                            <div class="label">
                                First Name<span class = "star"> *</span>
                            </div>
                            <input type="text" required>
                        </div>
                        <div class="field">
                            <div class="label">
                                Middle Name(optional)
                            </div>
                            <input type="text" required>
                        </div>
                        <div class="field">
                            <div class="label">
                                Surname(Lastname)<span class = "star"> *</span>
                            </div>
                            <input type="text" required>
                        </div>
                        <div class="field-1">
                            <div class="label-1">
                                FACULTY<pan class = "star"> *</span>
                            </div>
                            <select name="" id="faculty" onchange ="showDiv('div',this)" required>
                                <option value="" selected>--Please choose an option--</option>
                                <option value="1">FACULTY OF BUSSINESS AND MANAGEMENT SCIENCES</option>
                                <option value="2">FACULTY OF SOCIAL SCIENCES</option>
                                <option value="3">FACULTY OF APPLIED SCIENCES AND ENGINEERING</option>
                                <option value="4">FACULTY OF ARTS AND HUMANITIES</option>
                            </select>
                        </div>
                        
                        <div class="field-1" id = "div1" style ="display:none">
                            <div class="label-1">
                            Department<span class = "star"> *</span>
                            </div>
                            <select name="" id="" required>
                                <option value="">ACCOUNTING</option>
                                <option value="">BANKING & FINANCE</option>
                                <option value="">BUSINESS ADMINISTRATION</option> 
                                <option value="">ECONOMICS</option>
                                <option value="">MARKETING</option>
                                <option value="">PROJECT MANAGEMENT</option> 
                                <option value="">TOURISM & HOSPITALITY/HOTEL MANAGEMENT</option>
                                <option value="">TRANSPORT & LOGISTICS MANAGEMENT</option>
                                <option value="">HUMAN RESOURCES MANAGEMENT</option>            
                            </select>
                        </div>
                        <div class="field-1" id = "div2" style ="display:none">
                            <div class="label-1">
                            Department<span class = "star"> *</span>
                            </div>
                            <select name="" id="" required>
                                <option value="">HISTORY</option>
                                <option value="">INTERNATIONAL RELATIONS</option>
                                <option value="">PUBLIC & LOCAL ADMINISTRATION</option>    
                                <option value="">POLITICAL SCIENCE</option>
                                <option value="">PHILOSOPHY</option>
                                <option value="">PSYCHOLOGY</option>    
                                <option value="">SOCIOLOGY</option>      
                            </select>
                        </div>
                        <div class="field-1" id = "div3" style ="display:none">
                            <div class="label-1">
                            Department<span class = "star"> *</span>
                            </div>
                            <select name="" id="" required>
                                <option value="">ARCHITECTURE</option>
                                <option value="">AGRICULTURAL AND RESOURCE ECONOMICS</option>
                                <option value="">AGRICULTURAL EXTENSION AND COMMUNICATION TECHNOLOGY</option>  
                                <option value="">COMPUTER SCIENCE</option>    
                                <option value="">COMPUTER ENGINEERING</option>
                                <option value="">CIVIL ENGINEERING</option>  
                                <option value="">ESTATE MANAGEMENT</option>
                                <option value="">ELECTRICAL ELECTRONIC ENGINEERING</option>
                                <option value="">INFORMATION TECHNOLOGY</option>  
                                <option value="">MANAGEMENT INFORMATION SYSTEM</option>       
                            </select>
                        </div>
                        <div class="field-1" id = "div4" style ="display:none">
                            <div class="label-1">
                            Department<span class = "star"> *</span>
                            </div>
                            <select name="" id="" required>
                                <option value="">ENGLISH</option>
                                <option value="">FRENCH AND INTERNATIONAL STUDIES</option>
                                <option value="">JOURNALISM</option>     
                                <option value="">LINGUISTICS</option>
                                <option value="">MASS COMMUNICATION</option>
                                <option value="">MEDIA STUDIES & CREATIVE WRITING</option>  
                                <option value="">PUBLIC RELATIONS</option> 
                                <option value="">THEATRE & PERFORMING ARTS</option>        
                            </select>
                        </div>
                        
                        <div class="field-next">
                            <button class="firstNext next">Next</button>
                            <a href="ModeOfEntry.php" class = "Dashboard-link"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
                        </div>
                    </div>

                    <div class="page">
                        <div class="field-2">
                            <div class="label-2">
                                Upload OND/ND Result<span class = "star"> *</span>
                            </div>
                            <input type="file" id="myfile" name="myfile" required>
                        </div>
                        
                        <div class="field btns">
                            <button class="prev-1 prev">Previous</button>
                            <button class="next-1 next">Next</button>
                        </div>
                    </div>
                    <div class="page">
                        
                        <div class="field btns">
                            <button class="prev-2 prev">Previous</button>
                            <input type="submit" class = "submit" name = "" Value = "Submit">
                        </div>
                    </div>
                </form> 
            </div>
        </div>

    </div>   
</div>



<?php
    include("includes/Webscript.php");
?>

    
</body>
</html>