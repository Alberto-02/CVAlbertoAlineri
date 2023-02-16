<?php


require_once('email.php');

$email = $_POST['email'];
$nome = $_POST['nome'];
$messaggio = $_POST['messaggio'];



$sql = "INSERT INTO messaggi (email,nome, messaggio) VALUES ('$email', '$nome','$messaggio')";

if($connessione->query($sql)=== true){
    echo "Messaggio inviato con successo <br>";
}else{
    echo "Errore durante l'invio del messaggio $sql <br>";
}

echo json_encode(array("email"=>$email,"nome"=>$nome,"messaggio"=>$messaggio));

$connessione->close(); 

?>