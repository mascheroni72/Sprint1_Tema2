<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 function calculadora ($num1,$num2,$operacion){
 
     switch ($operacion) {
         case '+':
             $resultado = $num1 + $num2;
             break;
         case '-':
             $resultado = $num1 - $num2;
             break;
         case '*':
             $resultado = $num1 * $num2;
             break;
         case '/':
             $resultado = $num1 / $num2;
             break;
        }
            return $resultado;
    } 
    
    $num1 = 7;
    $num2 = 4;

     echo " El resultado de la suma es " . calculadora($num1,$num2, '+') . "<br>";
     echo " El resultado de la resta es " . calculadora ($num1,$num2, "-") ."<br>";
     echo " El resultado de la multiplicación es " . calculadora ($num1,$num2, "*") ."<br>";
     echo " El resultado de la división es " . calculadora ($num1,$num2, "/") ."<br>";
  
 ?>
</body>
</html>