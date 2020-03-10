<?php

define('USER', 'billy');
define('PASSWD', '1312');
define('HOST', 'localhost');
define('DB', 'borntolose');

function connectDb() {
    
    $dsn = 'mysql:dbname=' . borntolose . ';host=' . HOST;
    try {
        $db = new PDO($dsn, USER, PASSWD, ['PDO::ATTR_ERRMODE'=> 'PDO::ERRMODE_EXCEPTION']);
        return $db;
    } catch (Exception $ex) {
        die('La connexion à la bdd a échoué !');
    }
}
?>