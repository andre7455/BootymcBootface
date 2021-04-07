<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

 <!-- FAVICON -->
  <link rel="shortcut icon" href="assets/images/favicon.png">

<!-- CSS:: FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- CSS:: MAIN -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">

<?php

$page_title = 'chance a customer';

include "DatabaseConfig.php";

$id = $_POST['productnumemr'];
$naam = $_POST['naam'];
$prijs = $_POST['prijs'];

$sql = 'UPDATE product SET naam = "' . $product . '", prijs = "' . $prijs . '" WHERE id = "' . $product . '"';

echo '<h1>[ADMIN] Slijterij stuk in m`n kraag </h1>';
echo '<p>edit a product</p>';


if( $conn->query( $sql ) )
{
    echo "<p>The product has succesfully been chanced</p>";
}
else
{
    echo "<p>The product could not be chanced</p>";
}

echo '<p><a href="admin.php">Terug naar het overzicht</a></p>';

include 'includes/footer.php';

?>