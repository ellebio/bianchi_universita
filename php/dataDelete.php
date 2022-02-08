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
    isset($_POST["matricola"]) &&
    !empty(trim($_POST["matricola"]))
) {
    $matricola = $_POST["matricola"];

    $deleteQuery = "DELETE FROM
                        Studente
                    WHERE
                        matricola = $matricola";

    $res = $conn->query($deleteQuery);

    if ($res == FALSE) {
        $msg = urlencode("Errore di sistema");
        header("Location:errorPage.php?error=$msg&url_sent=delete.php");
    }

    echo ("
        <!DOCTYPE html>
        <html lang='it'>
        
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Eliminazione studente</title>
        </head>
        
        <body>
            <h3>Studente eliminato correttamente!</h3><br>
            <a href='delete.php'><button>Inserisci di nuovo</button></a>
        </body>
        
        </html>
    ");
}
