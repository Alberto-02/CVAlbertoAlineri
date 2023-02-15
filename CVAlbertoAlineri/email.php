<?php

$host = "127.0.0.1";
$user = "finsoft";
$password = "finsoft";
$database = "email";

$connessione = new mysqli($host,$user,$password, $database);

if($connessione === false){
    die("Errore di connessione: " . $connessione->connect_error);

}
//echo "Connessione avvenuta con successo: ";
?>