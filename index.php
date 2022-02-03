<?php

require_once 'php/config.php';
$conn = new mysqli(
    $config["mysql_host"],
    $config["mysql_user"],
    $config["mysql_password"],
    $config["mysql_db"]
);

if ($conn->connect_error) {
    die("Errore di connessione al database.<br>");
}

echo ("<!DOCTYPE html>
    <html lang='it'>
    
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>
    
    <body>
    
        <a href='php/insert.php'><button>Inserisci studente</button></a>
    
    </body>
    
    </html>"
);
