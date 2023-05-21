<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feldolgozó</title>
</head>
<body>
    <font style="font-size: 18pt;">
        <h2>Űrlap</h2>
<?php

echo("<strong>NÉV: </strong>" . $_POST['nev']. "<br><br>");

echo("<strong>Életkor: </strong>" . $_POST['eletkor']. "<br><br>");

echo("<strong>Kedvenc tematika: </strong>" . $_POST['tematika']. "<br><br>");
?>
<a href="urlap.html" target="keret">Vissza az űrlapra</a>
    </font>
</body>
</html>