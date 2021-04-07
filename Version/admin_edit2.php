<?php

$page_title = 'chance a product';

include 'includes/header.php';
include 'includes/config.php';

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