<?php

$page_title = 'delete this product';

include 'includes/header.php';
include "DatabaseConfig.php";

$id = $_POST['product'];


$sql = 'DELETE FROM product WHERE product="' . $product . '"';

echo '<h1>[ADMIN] Slijterij stuk in m`n kraag </h1>';
echo '<p>delete this product</p>';


if( $conn->query( $sql ) )
{
    echo "<p>The product has succesfully been deleted</p>";
}
else
{
    echo "<p>The product could not be deleted</p>";
}

echo '<p><a href="klantenoverzicht.php">Terug naar het overzicht</a></p>';

include 'includes/footer.php';

?>