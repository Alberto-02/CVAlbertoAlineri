<?php
//die("ciao");

require_once('email.php');

$email = $_POST['email'];
$nome = $_POST['nome'];
$messaggio = $_POST['messaggio'];

//die($email);

$sql = "INSERT INTO messaggi (email,nome, messaggio) VALUES ('$email', '$nome','$messaggio')";
//var_dump(array($email,$nome,$messaggio));
if($connessione->query($sql)=== true){
    echo "Registrazione effettuata con successo <br>";
}else{
    echo "Errore durante registrazione utente $sql <br>";
}

echo json_encode(array("email"=>$email,"nome"=>$nome,"messaggio"=>$messaggio));

$connessione->close(); 

?>