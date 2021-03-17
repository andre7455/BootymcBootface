<?php 
include "includes/header.php";
include "includes/DatabaseConfig.php";
?>



<html>

<p>Andre is een kaasjager</p>

<!--
<button onclick="test()">click me</button>

<script>
function test(){
    <?php
        $DBConfig = new DatabaseConfig;
        $sql = "INSERT INTO Boten( `Titel`, `Beschrijving`, `Locatie`, `prijs`) VALUES ('test', 'test', 'test', 'test');";
        
        $stmt = $DBConfig->connect()->prepare($sql);
        $stmt->execute();
    ?>
}
</script>
-->
</html>

<?php
include "includes/footer.php";
?>

