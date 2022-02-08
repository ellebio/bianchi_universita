<?php


    if(isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["url_sent"]) && !empty($_GET["url_sent"])){
        $errorMsg = urldecode($_GET["error"]);
        $url = $_GET["url_sent"];
        trim($errorMsg);
        echo("<link rel='stylesheet' href='../style/style.css'>");
        echo("<div id=login-section>");
        echo("<img src='../img/uh-oh.png'>");
        echo("<p id='error'><b>");
        echo("$errorMsg");
        echo("</b></p>");
        echo("<a href='$url'>");
        echo("<button>");
        echo("Back to the home");
        echo("</button>");
        echo("</a>");
        echo("</div>");
    }else{
        echo("Leaving...");
    }
