<?php


require_once('email.php');

$username = $_POST['username'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);



$sql = "INSERT INTO messaggi (email,nome, messaggio) VALUES ('$email', '$nome','$messaggio')";

if($connessione->query($sql)=== true){
}else{
    echo "Errore durante la registrazione $sql <br>";
}

echo json_encode(array("username"=>$username,"password"=>$password));

$connessione->close(); 

?>