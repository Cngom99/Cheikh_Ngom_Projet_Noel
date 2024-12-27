<?php
    $host = 'localhost';
    $db = 'gestion_universitaire';
    $user = 'postgres';
    $password = 'root';

    $conn = pg_connect("host=$host dbname=$db user=$user password=$password");

    if (!$conn) {
        die("Connection failed: " . pg_last_error());
    }
?>