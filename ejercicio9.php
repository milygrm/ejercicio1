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
<h2> Ejercicio 9: Construya un programa que resuelva el problema que tienen en una gasolinera. 
    Los surtidores de la misma registran lo que “surten” en galones, pero el precio de la gasolina está fijado en litros. 
    El programa debe calcular e imprimir lo que hay que cobrarle al cliente. 
    Se debe considerar que cada galón tiene 3.785 litros y el precio del litro es $4.50.
    <?php
    $galones = 10; 
    $precioLitro = 4.50; 

    $litros = $galones * 3.785;
    $total = $litros * $precioLitro;

    echo "<h2>El total a pagar es: $" . $total . "</h2>";
    ?>

</html>