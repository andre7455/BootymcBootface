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

if (!empty($userRow))

$i = 0;
    $rowLength = count($userRow);
    while ($i < $rowLength) {
        $userprintID = $userRow[$i]["ID"];
        $userprintTitel = $userRow[$i]["Titel"];
        $userprintBeschrijving = $userRow[$i]["Beschrijving"];
        $userprintLocatie = $userRow[$i]["Locatie"];
        $userprintPrijs = $userRow[$i]["Prijs"];

        $i++;
        if($i == $rowLength){
            break;
        }
    }


$id = $_POST['id'];

$sql = 'DELETE FROM boten WHERE id ="' . $id . '"';

if( $conn->query( $sql ))
{
    echo "<p>De boot is verwijderd</p>";
}
    else
    {
        echo "<p>De boot is niet verwijderd</p>";
    }

?>