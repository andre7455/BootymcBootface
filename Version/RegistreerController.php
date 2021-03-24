<?php
include "DatabaseConfig.php";

class RegistreerController{

    public static function login(){

        $dbconfig = new DatabaseConfig;
        
        $email = $_POST["registreerEmail"];
        $username = $_POST["registreerUsername"];
        $password = $_POST["registreerPassword"];
        $passwordConfirmed = $_POST["registreerPasswordConfirmed"];

        if ($password === $passwordConfirmed) {
        }
    }
}