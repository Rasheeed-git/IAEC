<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include('../includes/head.php'); ?>
    <link rel="stylesheet" href="../css/style.css" />
    <title>Registraion Form</title>
  </head>
  <body>
    <form action="../index.php" class="form">
      <h1 class="text-center">OND/ND Entry Requirements</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div> 
        <div class="progress-step progress-step-active" data-title="Data"></div>
        <div class="progress-step" data-title="Upload Document"></div>
        <div class="progress-step" data-title="Complete"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active" id="tab-1">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-4">
              <label for="username">FirstName</label><span class = "star"> *</span>
              <input type="text" name="username" class="form-control name" id="fname" required/>
            </div>
            <div class="col-sm-4">
              <label for="username">MiddleName(Optional)</label>
              <input type="text" name="username" class="form-control name" id="" />
            </div>
            <div class="col-sm-4">
              <label for="username">SurName(LastName)</label><span class = "star"> *</span>
              <input type="text" name="username" class="form-control name" id="lname" required/>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 mt-2">
              <label for="">FACULTY</label><span class = "star"> *</span>
                <select name="" class="form-control" id="faculty" onchange ="showDiv('div',this)" required>
                    <option value="" selected>--Please choose an option--</option>
                    <option value="1">FACULTY OF BUSSINESS AND MANAGEMENT SCIENCES</option>
                    <option value="2">FACULTY OF SOCIAL SCIENCES</option>
                    <option value="3">FACULTY OF APPLIED SCIENCES AND ENGINEERING</option>
                    <option value="4">FACULTY OF ARTS AND HUMANITIES</option>
                </select>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 mt-2">
              <div id = "div1" style ="display:none">
              <label for="">Department</label><span class = "star"> *</span>
                  <select name="" id="dept" class="form-control">
                  <option value="" selected>--Please choose an option--</option>
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
              <div id = "div2" style ="display:none">
              <label for="">Department</label><span class = "star"> *</span>
                  <select name="" id="dept" class="form-control">
                  <option value="" selected>--Please choose an option--</option>
                      <option value="">HISTORY</option>
                      <option value="">INTERNATIONAL RELATIONS</option>
                      <option value="">PUBLIC & LOCAL ADMINISTRATION</option>    
                      <option value="">POLITICAL SCIENCE</option>
                      <option value="">PHILOSOPHY</option>
                      <option value="">PSYCHOLOGY</option>    
                      <option value="">SOCIOLOGY</option>      
                  </select>
              </div>
              <div id = "div3" style ="display:none">
              <label for="">Department</label><span class = "star"> *</span>
                  <select name="" id="dept" class="form-control">
                  <option value="" selected>--Please choose an option--</option>
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
              <div id = "div4" style ="display:none">
              <label for="">Department</label><span class = "star"> *</span>
                  <select name="" id="dept" class="form-control">
                  <option value="" selected>--Please choose an option--</option>
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
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 mt-4">
            <a href="Admission.php" class="text-pink"><i class="fa-solid fa-arrow-left"></i> Back</a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
            <div class="">
               <input type="button"  value="Next" class="btn btn-next w-100 mt-3"> 
            </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="form-step" id="tab-2">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <label for="">Upload OND/ND Result</label><span class = "star"> *</span>
              <input type="file" id="myfile" name="myfile" accept="image/*" required>
              <small><h6 class="mt-2 text-danger">please upload a valid and clear Image file.</h6></small>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 mt-3">
              <div class="bt-group">
                <input type="button" value="Previous" class="btn btn-prev w-100 mt-3"> 
              </div>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4 mt-3">
              <div class="">
              <input type="button" value="Next" class="btn btn-next w-100 mt-3"> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-step" id="tab-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 ">
               <p class="text-danger"><b>Warning Note!</b><br />
                Make Sure all the Information tally with the uploaded documents <br />
                to avoid admission rejection and consequences.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 mt-3">
              <div class="bt-group">
                <a href="#" class="btn btn-prev w-100">Previous</a>
              </div>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4 mt-3">
              <div class="">
              <input type="submit" value="Submit" class="btn  w-100">
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

    <?php
    include("../includes/Webscript.php");
    ?> 


  </body>
</html>
