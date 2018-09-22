<?php

$link = mysqli_connect("localhost", "root", "", "test_db");
        
    if(mysqli_connect_error()){
            
        die("Verbindung zur Datenbank konnte nicht aufgebaut werden.");
    }

?>