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

$page_title = "Admin - CoralYachts";

include "DatabaseConfig.php";

echo '<h1>[Admin] CoralYachts</h1>';
echo '<p>Here you can edit the customer you want</p>';

echo '<a href="klantenoverzicht.php?id='  . '">back</a>';

$dbconfig = new DatabaseConfig;

$userQuery = "SELECT * FROM gebruiker";
    $userResult = $dbconfig->connect()->prepare($userQuery);
    $userResult->execute(array());
    $userRow = $userResult->setFetchMode(PDO::FETCH_ASSOC);
    $userRow = $userResult->fetchAll();

$id = $_GET['gebruiker'];

$sql = 'SELECT * FROM Rol WHERE Rol = "' . $Rol . '" LIMIT 1';

$result = $conn->query($sql);

if ( $result->num_rows == 0 )
{
    die("customer could not be found");
}

$row = $result->fetch_assoc();

//formulier
?>

<form method="POST" action="admin_edit2.php">
<input type="hidden" name="Rol" value=" <?php echo $row['Rol'] ?> ">

<h2>Product Info</h2>


    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="tekst" class="form-control" name="product" value="<?php echo $row['product']; ?>" placeholder="Naam Product">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <?php echo $row['catogorie']; ?>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="tekst" class="form-control" name="prijs" value="<?php echo $row['prijs']; ?>" placeholder="Prijs">
      </div>
    </div>

    <button class="btn btn-primary" type="submit">Save customer</button>

</form>

