<?php

require_once(dirname(__DIR__) . 'Bianchi_università\php\config.php');
$conn = new mysqli(
    $config["mysql_host"],
    $config["mysql_user"],
    $config["mysql_password"],
    $config["mysql_db"]
);

if ($conn->connect_error) {
    die("Errore di connessione al database.<br>");
}

if (
    isset($_POST["fName"]) &&
    isset($_POST["lName"]) &&
    isset($_POST["age"]) &&
    !empty(trim($_POST["fName"])) &&
    !empty(trim($_POST["lName"])) &&
    !empty(trim($_POST["age"]))
) {
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $age = intval($_POST["age"]);

    $insertQuery = "INSERT INTO 
                        Studente (nome, cognome, età) 
                    VALUES 
                        ('$fName', '$lName', $age);";

    $res = $conn->query($insertQuery);

    if ($res == FALSE) {
        die("errore nell'inserimento dello studente");
    }

    echo ("
        <!DOCTYPE html>
        <html lang='it'>
        
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Inserimento studente</title>
        </head>
        
        <body>
            <h3>Studente inserito correttamente!</h3><br>
            <a href='insert.php'><button>Inserisci di nuovo</button></a>
            <a href='../index.php'><button>Home</button></a>
        </body>
        
        </html>
    ");
}