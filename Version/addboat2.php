<?php ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <!-- PAGE TITLE -->
  <title>Home - CoralYachts</title>

  <!-- META-DATA -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- FAVICON -->
  <link rel="shortcut icon" href="assets/images/favicon.png">

  <!-- CSS:: FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS:: MAIN -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">

</head>

 <body>
 <?php 
    include 'header.php';
    include 'DatabaseConfig.php'
?>
<br><br><br><br><br><br>

<form>
  <div class="form-group">
    <label>Boat name</label>
    <input type="text" class="form-control" id="name" placeholder="Costa Concordia">
  </div>

  <div class="form-group">
    <label>Beschijving</label>
    <input type="textbox" class="form-control input-large" id="beschijving" placeholder="Password">
  </div>

  <div class="form-group">
    <label for=""></label>
  </div>

  <div class="form-group">
    <label>prijs</label>
    <input type="text" class="form-control" id="prijs" placeholder="99.99">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>

