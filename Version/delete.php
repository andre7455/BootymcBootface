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

echo '<h1>[ADMIN] CoralYachts </h1>';
echo '<p>Verwijder hier de boten</p>';

?>

<br>
<br>
<br>
<br>
<br>  
<br>
<br>
<br>
<br>
<br>
<?php

$dbconfig = new DatabaseConfig;

$userQuery = "SELECT * FROM boten";
    $userResult = $dbconfig->connect()->prepare($userQuery);
    $userResult->execute(array());
    $userRow = $userResult->setFetchMode(PDO::FETCH_ASSOC);
    $userRow = $userResult->fetchAll();

//boot ID
$id = $_GET['id'];

//Query om 1 boot uit de database te halen
$sql = 'SELECT * FROM boten WHERE id = "' . $id . '" LIMIT 1';

//Qeury op database
$userResult = $dbconfig->connect($userQuery);

if ($userResult->num_rows == 0)
{
    die ( 'We hebben de boot niet gevonden in de database' );
}

?>

<form method="POST" action="verwijder.php">
<input type="hidden" name="id" value="<?= $userRow['id'] ?>">

<h2>Boot gegevens</h2>
<p>Weet u zeker dat u <strong><?= $userRow['Titel']; ?></strong> wilt verwijderen?</p>

<a href="botenbeheren.php" class="btn btn-primary">Nee terug naar beheren</a>
<button class="btn btn-danger" typme="submit">Ja verwijder deze boot.</button>