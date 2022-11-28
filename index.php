<?php
require("connection/db.php");
$name = filter_input(INPUT_POST, "Name");


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="bootstrap5/jquery/jquery.js"></script>
    <script src="bootstrap5/chosen/chosen.jquery.js"></script>
    <link rel="stylesheet" href="bootstrap5/chosen/chosen.css"/>
    <title>Document</title>
  </head>
  <body>
    <p>The collected Name Is <?php echo $name?></p>
   <!-- <h1>Subscribe to What About Coding</h1>
    <select data-placeholder="Choose a name..." class="ch">
      <option></option>
      <option>Milli</option>
      <option>Jhon</option>
      <option>Harry</option>
      <option>Jessica</option>
      <option>illi</option>
      <option>hon</option>
      <option>arry</option>
      <option>essica</option>
      <option>lli</option>
      <option>on</option>
      <option>rry</option>
      <option>ssica</option>
      <option>li</option>
      <option>n</option>
      <option>ry</option>
      <option>sica</option>
    </select>

    <script>
      $(document).ready(function () {
        $(".ch").chosen({
          width: "50%",
        });
      });
    </script>
    -->
  </body>
</html>