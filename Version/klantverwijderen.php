<?php

$page_title = "delete this product";

include 'includes/header.php';
include "DatabaseConfig.php";

echo '<h1>[Admin] stuk in m`n kraag</h1>';
echo '<p>Here you can delete the product you want</p>';

$id = $_GET['productnummer'];

$sql = 'SELECT * FROM product WHERE product = "' . $product . '" LIMIT 1';

$result = $conn->query($sql);

if ( $result->num_rows == 0 )
{
    die("Product could not be found");
}

$row = $result->fetch_assoc();

//formulier
?>

<form method="POST" action="admin_delete2.php">
<input type="hidden" name="product" value=" <?php echo $row['product'] ?> ">

<h2>Product Info</h2>
<p>Are you sure that you want to delete <strong><?php echo $row['product']; ?></strong>?</p>


    <a href="admin.php" class="btn btn-primary">no go back to overview</a>
    <button class="btn btn-danger" type="submit">yes delete product</button>

</form>


<?php
include 'includes/footer.php';

?>