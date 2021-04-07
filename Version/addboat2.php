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


<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>

