<?php

//fichier de fonctionnalités communes à plusieurs scripts

//connexion à la base de données
try{
    $db = new PDO('mysql:host=127.0.0.1:8889;dbname=portfolio;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch (Exception $exception)
{
    die( 'Erreur : ' . $exception->getMessage() );
}

//ouverture de session pour connexions utilisateurs et admins

?>
