<?php
include "DatabaseConfig.php";

class LoginController{

    public static function login(){

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
                        $_SESSION["userEmail"] = $userRow[$i]['Email'];
                        $_SESSION["username"] = $userRow[$i]['Username'];
                        $_SESSION["userRole"] = $userRow[$i]['Rol'];
                    }
                    $i++;

                    if ($i == $rowLength) {
                        //foutmelding
                    }
                }                
            }
        }
    }
}