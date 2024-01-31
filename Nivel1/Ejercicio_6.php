<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 function isBitten (){
    $probabilidad = rand (1,100);

    if ($probabilidad <= 50){
        return "El Charly te muerde el dedo con ahínco";
        }else{
        return "El Charly no tiene hambre y no te muerde";
    }
}    
     echo  isBitten() ."<br>";
 ?>
</body>
</html>