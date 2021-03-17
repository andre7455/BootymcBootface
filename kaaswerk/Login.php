<?php 
include "includes/header.php";
include "includes/DatabaseConfig.php";
?>

<div class="w-25 m-5">
    <form action="LoginController.php" method="POST"> 
        <p>E-Mail</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons">email</span>
          </div>
          <input type="text" class="form-control" placeholder="E-mail" name="loginEmail" id="loginEmail" required>
        </div>
        <br>
        <p>Wachtwoord</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons">vpn_key</span>
          </div>
          <input type="password" class="form-control" placeholder="Wachtwoord" name="loginPassword" id="loginPassword" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form> 
</div>

<?php
include "includes/footer.php";
?>