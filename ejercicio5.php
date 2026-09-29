<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<hr>
<h2> Ejercicio 5:Construya un programa tal que dado como datos la base y la altura de un rectángulo, calcule el perímetro y la superficie del mismo. 
    Recuerde que la superficie de un rectángulo se calcula aplicando la siguiente fórmula: Superficie = base * altura, y el perímetro
    se calcula como: Perímetro = 2*(base + altura).
 <?php
 $base = 4;
 $altura =7;

 $superficie = $base * $altura;
 $perimetro = 2 * ($base + $altura);

 echo "<h2>El perímetro del rectángulo es: " . $perimetro . "</h2>";
 echo "<h2>La superficie del rectángulo es: " . $superficie . "</h2>";
 ?>
 <hr>
</html>