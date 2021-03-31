<?php

$page_title = "Admin - CoralYachts";

include "header.php";
include "DatabaseConfig.php";

echo '<h1>[ADMIN] CoralYachts </h1>';
echo '<p>Beheer hier de klanten</p>';

echo '<a href="klanttoevoegen.php" class="btn btn-primary">Add a customer</a>';

?>

<br>

<?php

$dbconfig = new DatabaseConfig;

$userQuery = "SELECT * FROM gebruiker";
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
                <th>Username</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
    '; 

    // output data of each row
    $i = 0;
    $rowLength = count($userRow);
    while ($i < $rowLength) {
        $userprintName = $userRow[$i]["Username"];
        $userprintEmail = $userRow[$i]["Email"];
        $userprintRol = $userRow[$i]["Rol"];


        echo "Username: " . $userprintName . " - Email: " . $userprintEmail . " - Rol: " . $userprintRol . "<br>";
        echo
        '
            <tr>
            <td>' . $userprintName . '</td>
            <td>' . $userprintEmail . '</td>
            <td>' . $userprintRol . '</td>
                <td><a href="admin_edit.php?id='  . '">change</a> <a href="admin_delete.php?id='  . '">delete</a></td>
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

?>