<?php 
include "includes/header.php";
include "includes/DatabaseConfig.php";
?>

<div class="m-5">
    <form action="RegistreerController.php" method="POST"> 
        <div>
            <p>E-Mail</p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text material-icons">email</span>
                </div>
                <input type="email" class="form-control" placeholder="E-mail" name="loginEmail" id="loginEmail" required>
            </div>
            <br>
            <p>Voornaam</p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text material-icons"></span>
                </div>
                <input type="text" class="form-control" placeholder="Voornaam" name="loginVoornaam" id="loginVoornaam" required>
            </div>
            <br>
            <p>Achternaam</p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text material-icons"></span>
                </div>
                <input type="text" class="form-control" placeholder="Achternaam" name="loginAchternaam" id="loginAchternaam" required>
            </div>
            <br>
            <p>Telefoonnummer</p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text material-icons"></span>
                </div>
                <input type="text" class="form-control" placeholder="Telefoonnummer" name="loginTelefoonnummer" id="loginTelefoonnummer" required>
            </div>
            <br>
            <p>Adres</p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text material-icons"></span>
                </div>
                <input type="text" class="form-control" placeholder="Adres" name="loginAdres" id="loginAdres" required>
            </div>
        </div>

        <div>        
            <p>Woonplaats</p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text material-icons"></span>
                </div>
                <input type="text" class="form-control" placeholder="Woonplaats" name="loginWoonplaats" id="loginWoonplaats" required>
            </div>
            <br>
            <p>Postcode</p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text material-icons"></span>
                </div>
                <input type="text" class="form-control" placeholder="Postcode" name="loginPostcode" id="loginPostcode" required>
            </div>
            <br>
            <p>Huisnummer</p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text material-icons"></span>
                </div>
                <input type="text" class="form-control" placeholder="Huisnummer" name="loginHuisnummer" id="loginHuisnummer" required>
            </div>
            <br>
            <p>Wachtwoord</p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text material-icons"></span>
                </div>
                <input type="password" class="form-control" placeholder="Wachtwoord" name="loginPassword" id="loginPassword" required>
            </div>
            <br>
            <p>Wachtwoord bevestigen</p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text material-icons"></span>
                </div>
                <input type="password" class="form-control" placeholder="Wachtwoord bevestigen" name="loginPasswordbevestigen" id="loginPasswordbevestigen" required>
            </div>
        </div>
        <br>
        
        <button type="submit" class="btn btn-primary w-100">Registreer</button>
    </form> 
</div>

<?php
include "includes/footer.php";
?>