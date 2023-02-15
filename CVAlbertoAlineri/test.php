<?php

require_once("email.php");

if ($result = $connessione -> query("SELECT * FROM messaggi")) {
    echo "Returned rows are: " . $result -> num_rows;
    // Free result set
    $result -> free_result();
}

?>