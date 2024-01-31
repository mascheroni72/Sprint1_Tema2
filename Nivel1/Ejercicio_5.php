<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 function formacion ($nota){

    if ($nota >=60){
        $grado = "Tienes un nivel para primera división";
        }else if ($nota <=59 && ($nota >= 45)){
            $grado = "Tu nivel es de segunda división";
        }else if ($nota <=44 && ($nota >= 33)){
            $grado = "Tu nivel se corresponde con la tercera división";
        }else if ($nota <33){
            $grado = "Has suspendido";
        }
        return $grado;
}    
    $nota = 72;
    
     echo  formacion($nota) ."<br>";
 ?>
</body>
</html>