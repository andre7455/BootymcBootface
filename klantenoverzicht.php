<?php

$page_title = "Admin - CoralYachts";

include "header.php";
include "DatabaseConfig.php";

echo '<h1>[ADMIN] CoralYachts </h1>';
echo '<p>Beheer hier de klanten</p>';

echo '<a href="klanttoevoegen.php" class="btn btn-primary">Add a customer</a>';

$sql = "SELECT * FROM gebruiker";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{

    echo '
    <table class="table">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Achternaam</th>
                <th>Tel.</th>
                <th>Adres</th>
                <th>Woonplaats</th>
                <th>Postcode</th>
                <th>Huisnummer</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
    ';

    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        //echo "Naam: " . $row["Naam"]. " - Achternaam: " . $row["Achternaam"]. " - Tel.: " . $row["telefoonnummer"]. ", Adres " . $row["Adres"]. ", Woonplaats " . $row["Woonplaats"]. ", Postcode " . $row["Postcode"]. ", Huisnummer " . $row["Huisnummer"]. ", Rol " . $row["Rol"]."<br>";
        echo
        '
            <tr>
                <td>' . $row["Naam"] . '</td>
                <td>' . $row["Achternaam"] . '</td>
                <td>' . $row["Tel."] . '</td>
                <td>' . $row["Adres"] . '</td>
                <td>' . $row["Woonplaats"] . '</td>
                <td>' . $row["Postcode"] . '</td>
                <td>' . $row["Huisnummer"] . '</td>
                <td>' . $row["Rol"] . '</td>
                <td><a href="admin_edit.php?id=' . $row['productnummer'] . '">change</a> <a href="admin_delete.php?id=' . $row['productnummer'] . '">delete</a></td>
            </tr>

        ';
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

$conn->close();





include 'includes/footer.php';

?>

?>