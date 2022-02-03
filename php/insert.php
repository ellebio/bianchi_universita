<?php

require_once 'config.php';
$conn = new mysqli(
    $config["mysql_host"],
    $config["mysql_user"],
    $config["mysql_password"],
    $config["mysql_db"]
);

if ($conn->connect_error) {
    die("Errore di connessione al database.<br>");
}

echo("
    <!DOCTYPE html>
    <html lang='it'>
    
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Inserimento studente</title>
    </head>
    
    <body>
        <form action='data.php' method='post'>
            <label for='fName'>Nome:</label><input type='text' name='fName' id='fName'><br>
            <label for='fName'>Cognome:</label><input type='text' name='lName' id='lName'><br>
            <label for='fName'>Età:</label><input type='number' name='age' id='age' min=0 max=120><br>
            <input type='submit' value='inserisci'>
        </form>
    </body>
    
    </html>
");