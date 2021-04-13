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
include "header.php";
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
{

    echo '
    <table class="table">
        <thead>
            <tr>
                <th>Titel</th>
                <th>Beschrijving</th>
                <th>Locatie</th>
                <th>Prijs</th>
            </tr>
        </thead>
        <tbody>
    '; 

    // output data of each row
    $i = 0;
    $rowLength = count($userRow);
    while ($i < $rowLength) {
        $userprintTitel = $userRow[$i]["Titel"];
        $userprintBeschrijving = $userRow[$i]["Beschrijving"];
        $userprintLocatie = $userRow[$i]["Locatie"];
        $userprintPrijs = $userRow[$i]["Prijs"];



        //echo "Username: " . $userprintName . " - Email: " . $userprintEmail . " - Rol: " . $userprintRol . "<br>";
        echo
        '
            <tr>
            <td>' . $userprintTitel . '</td>
            <td>' . $userprintBeschrijving . '</td>
            <td>' . $userprintLocatie . '</td>
            <td>' . $userprintPrijs . '</td>
                <td><a href="botenverwijderen.php?id='  . '">delete</a></td>
            </tr>

        ';
        $i++;
        if($i == $rowLength){
            break;
        }
    }

    echo
    '
        </body>
    </table>
    ';

}

else
{
    echo "Geen gegevens in de database gevonden";
}

?>