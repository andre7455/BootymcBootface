<?php
include "DatabaseConfig.php";

$dbconfig = new DatabaseConfig;
$email = $_POST["loginEmail"];
$password = $_POST["loginPassword"];

if(isset($_POST["loginSubmit"])){
    $userQuery = "SELECT * FROM gebruiker WHERE Email= ?";
    $userResult = $dbconfig->connect()->prepare($userQuery);
    $userResult->execute(array($email));
    $userRow = $userResult->setFetchMode(PDO::FETCH_ASSOC);
    $userRow = $userResult->fetchAll();

    if(!empty($userRow)){
        $i = 0;
        $rowLength = count($userRow);
        while ($i <= $rowLength) {
            if (password_verify($password, $userRow[$i]['Wachtwoord'])) {
                @session_start();
                $_SESSION["userEmail"] = $userRow[$i]['Email'];
                $_SESSION["username"] = $userRow[$i]['Username'];
                $_SESSION["userRole"] = $userRow[$i]['Rol'];
                header("Location: index.html");
            }
            $i++;
            if ($i == $rowLength) {
                //foutmelding
                print_r("Er is iets fout gegaan, neem contact op met de systeembeheerder");
            }
            print_r("Er is iets fout gegaan, neem contact op met de systeembeheerder");
        }    
        print_r("Er is iets fout gegaan, neem contact op met de systeembeheerder");   
    }
    print_r("Er is iets fout gegaan, neem contact op met de systeembeheerder");
}
