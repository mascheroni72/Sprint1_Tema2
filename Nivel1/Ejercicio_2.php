<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$saludo = "Hello, World";
$saludo_en_mayusculas = strtoupper ($saludo);
$saludo_longitud = strlen ($saludo);
$saludo_inverso = strrev ($saludo);
$frase = "Aquest és el curs de PHP";
echo $saludo."<br>";
echo $saludo_en_mayusculas."<br>";
echo "La longitud del saludo es de " . $saludo_longitud. " espacios"."<br>";
echo "El saludo en orden inverso es " . $saludo_inverso."<br>";
echo $saludo . ". " . $frase;
?>
</body>
</html>

