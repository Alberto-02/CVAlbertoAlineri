<?php

require_once("email.php");

$username = $_POST['username'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


//query da eseguire
$sql = "INSERT INTO utenti (username, password) VALUES ('$username', '$hashed_password')";

if($connessione->query($sql)=== true){
    echo "Registrazione effettuata";
}else{
    echo "Errore durante la registrazione $sql <br>";
}

echo json_encode(array("username"=>$username,"password"=>$hashed_password));

$connessione->close(); 

?>