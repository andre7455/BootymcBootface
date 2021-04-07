<?php

$page_title = "edit this product";

include 'includes/header.php';
include 'includes/config.php';

echo '<h1>[Admin] CoralYachts</h1>';
echo '<p>Here you can edit the customer you want</p>';

$id = $_GET['customer'];

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


<?php
include 'includes/footer.php';

?>