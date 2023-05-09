<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feldolgozó</title>
</head>
<body>
    <font style="font-size: 18pt;">
        <h2>HTML űrlap_NNU8PS</h2>
<?php

echo("<strong>NÉV: </strong>" . $_POST['nev']. "<br><br>");

echo("<strong>PIN kód: </strong>" . $_POST['kod']. "<br><br>");

echo("<strong>Gyümölcs: </strong>" . $_POST['gyumolcs']. "<br><br>");

echo("<strong>Életkor: </strong>" . $_POST['eletkor']. "<br><br>");

echo("<strong>Lábméret: </strong>" . $_POST['labmeret']. "<br><br>");

echo("<strong>Önbizalom: </strong>" . $_POST['onbizalom']. "<br><br>");
?>
<a href="urlap5,html">Vissza az űrlapra</a>
    </font>
</body>
</html>