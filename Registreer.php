<?php 
include "includes/header.php";
include "includes/DatabaseConfig.php";
?>

<div class="w-25 m-5">
    <form action="POST"> 
        <p>E-Mail</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons">email</span>
          </div>
          <input type="text" class="form-control" placeholder="E-mail" name="loginEmail" id="loginEmail">
        </div>
        <br>
        <p>Voornaam</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons"></span>
          </div>
          <input type="text" class="form-control" placeholder="Voornaam" name="loginVoornaam" id="loginVoornaam">
        </div>
        <br>
        <p>Achternaam</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons"></span>
          </div>
          <input type="text" class="form-control" placeholder="Achternaam" name="loginAchternaam" id="loginAchternaam">
        </div>
        <br>
        <p>Telefoonnummer</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons"></span>
          </div>
          <input type="text" class="form-control" placeholder="Telefoonnummer" name="loginTelefoonnummer" id="loginTelefoonnummer">
        </div>
        <br>
        <p>Adres</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons"></span>
          </div>
          <input type="text" class="form-control" placeholder="Adres" name="loginAdres" id="loginAdres">
        </div>
        <br>        
        <p>Woonplaats</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons"></span>
          </div>
          <input type="text" class="form-control" placeholder="Woonplaats" name="loginWoonplaats" id="loginWoonplaats">
        </div>
        <br>
        <p>Postcode</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons"></span>
          </div>
          <input type="text" class="form-control" placeholder="Postcode" name="loginPostcode" id="loginPostcode">
        </div>
        <br>
        <p>Huisnummer</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons"></span>
          </div>
          <input type="text" class="form-control" placeholder="Huisnummer" name="loginHuisnummer" id="loginHuisnummer">
        </div>
        <br>
        <p>Rol</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons"></span>
          </div>
          <input type="text" class="form-control" placeholder="Rol" name="loginRol" id="loginRol">
        </div>
        <br>
        <p>Wachtwoord</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons"></span>
          </div>
          <input type="text" class="form-control" placeholder="Wachtwoord" name="loginPassword" id="loginPassword">
        </div>
        <br>
        <p>Wachtwoord bevestigen</p>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text material-icons"></span>
          </div>
          <input type="text" class="form-control" placeholder="Wachtwoord bevestigen" name="loginPasswordbevestigen" id="loginPasswordbevestigen">
        </div>
        <br>
        <button class="btn btn-primary w-100">Registreer</button>
    </form> 
</div>

<?php
include "includes/footer.php";
?>