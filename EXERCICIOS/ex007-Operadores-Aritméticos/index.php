<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores Aritméticos</title>
</head>
<body>

<?php

    $a = 10;
    $b = 3;

    echo "<h1>Operadores Aritméticos em PHP</h1>";

    echo "<p>Valor de A: $a</p>";
    echo "<p>Valor de B: $b</p>";

    echo "<hr>";

    // Soma
    $soma = $a + $b;
    echo "<p>Soma (A + B): $soma</p>";

    // Subtração
    $sub = $a - $b;
    echo "<p>Subtração (A - B): $sub</p>";

    // Multiplicação
    $mult = $a * $b;
    echo "<p>Multiplicação (A * B): $mult</p>";

    // Divisão
    $div = $a / $b;
    echo "<p>Divisão (A / B): $div</p>";

    // Módulo (resto da divisão)
    $mod = $a % $b;
    echo "<p>Módulo (A % B): $mod</p>";

    // Exponenciação
    $exp = $a ** $b;
    echo "<p>Exponenciação (A ** B): $exp</p>";

    echo "<hr>";

    // Operadores de incremento
    $a++;
    echo "<p>Incremento de A (A++): $a</p>";

    $b--;
    echo "<p>Decremento de B (B--): $b</p>";

?>

</body>
</html>