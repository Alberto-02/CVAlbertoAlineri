<?php
$host = "127.0.0.1";
$user = "finsoft";
$password = "finsoft";
$database = "utenti";

$connessione = new mysqli($host, $user, $password, $database);

if($connessione === false){
    die("Errore di conessione: " . $connessione->connect_error);
}

$sql = "SELECT * FROM utenti";
if($result = $connessione->query($sql)){
    if($result->num_rows > 0){
        echo '<table>
        <thead>
        <tr>
        <th>email</th>
        <th>nome</th>
        <th>messaggio</th>   
        </tr></thead><tbody>';
        while($row = $result->fetch_array()){
            echo '
            <tr>
            <td>'$row['email'] . '</td>
            <td>'$row['nome'] . '</td>
            <td>'$row['messaggio'] . '</td>
            ';
        }
        echo "</tbody></table>"      
    }else{
        echo "Non ci sono messaggi";
    }
}else{
    echo "Errore impossibile leggere i messaggi";
}

$connesione->close();

?>