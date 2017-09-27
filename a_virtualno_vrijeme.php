<?php

    require("biblioteka.php");
    provjeri_uvjete();
    session_timeout();
    provjeri_ulogu(3);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Virtualno vrijeme</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="Projekt, FOI, WebDiP, Teretana">
        <meta name="date" content="05-05-2017">
        <meta name="author" content="Vedran Gložinić">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" media="screen" type="text/css">
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/datum.js"></script>
        <script type="text/javascript" src="js/virtualno_vrijeme.js"></script>
    </head>

    <body>
        <div id="stretcher">
            <div id="container">
                <div id="logo">
                    <img src="slike/logo.png">
                </div>

                <div id="information"></div>

                <div id="header">
                    VIRTUALNO VRIJEME
                </div>
                
                <div id="menu"> 
                     <ul>
                        <?php navigacija(); ?>
                     </ul>    
                     <hr>
                </div>

                <div id="content">
                    Virtualno vrijeme može se postaviti <a target="_blank" href="http://barka.foi.hr/WebDiP/pomak_vremena/vrijeme.html">ovdje.</a><br>
                    Za postavljanje vremena kliknite na gumb Postavi.
                    <br>
                    <br>
                    <button class="gumb" id="dohvati" type="button">Postavi</button>
                    <br>
                </div>   

                <div id="footer">
                    <hr>
                    <a href="mailto:vedglozin@foi.hr">VEDRAN GLOŽINIĆ</a> - SVA PRAVA PRIDRŽANA, 2017
                    <br>
                </div>        
            </div>
        </div>
    </body>
</html>