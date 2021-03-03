<?php 

class DatabaseConfig
{
    // definieer Database Host, Gebruiker, Wachtwoord en Databasemaa,
    private $host = "";
    private $user = "";
    private $pwd = "";
    private $dbName = "";

    public function connect()
    {
        //definieer soort database
        $dataSoortName = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        //maak database connectie
        $pdo = new PDO($dataSoortName, $this->user, $this->pwd);
        //set fetchmodus
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}

//include DatabaseConfig.php in php bestanden waar je er bij moet
?>

