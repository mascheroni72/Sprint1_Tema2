<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$edad = 18;
$nota = 8.35;
$nombre = "Lucía";
$universitario = true;
define ("MI_NOMBRE", "Pablo");

echo "Me llamo ". $nombre .", tengo ". $edad . " y he terminado el bachillerato con un promedio de ". $nota. "<br>";

if($universitario >= $edad){
    echo "Lucía puede empezar la universidad";
}else{
    echo "Lucía no puede empezar la universidad porque es menor de edad";
}
echo "<h1> Me llamo " . MI_NOMBRE . " y siempre me llamaré " . MI_NOMBRE."</h1>"; 
?>

</body>
</html>

