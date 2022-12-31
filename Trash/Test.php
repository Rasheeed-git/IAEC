<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../includes/head.php'); ?>
    
   <style>
  .field-1{
  width: 320px;
  height: 200px;
  padding:2em;
  margin: 25px 20px;
  display: inline-block;
  position: relative;
}


   </style>
    <title>Learn Chosen jQuery</title>
</head>
<body>
  <div class="field w-25">
  <select data-placeholder="Select a Language..." class="form-control-chosen h-100vh w-100" >
        <option value=""></option>
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="javascript">JavaScript</option>
        <option value="python">Python</option>
    </select>
  </div>
  

    <script src="../bootstrap5/jquery/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
    $('.form-control-chosen').chosen({
      no_results_text: "Oops, nothing found!"
    });
    });
    </script>

<?php 
  include('../includes/script.php');
  include("../includes/Webscript.php");
?>
</body>
</html>