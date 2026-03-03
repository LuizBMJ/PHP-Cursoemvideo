<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções Aritméticas</title>
</head>
<body>

<?php

    $a = 9;
    $b = 2.7;
    $numero = "255";
    $cateto1 = 3;
    $cateto2 = 4;

    echo "<h1>Funções Aritméticas em PHP</h1>";

    echo "<p>Valor de A: $a</p>";
    echo "<p>Valor de B: $b</p>";
    echo "<p>Número para conversão de base: $numero</p>";
    echo "<p>Catetos: $cateto1 e $cateto2</p>";

    echo "<hr>";

    // Valor absoluto
    echo "<p>abs(-15): " . abs(-15) . "</p>";

    // Potência
    echo "<p>pow($a, 2): " . pow($a, 2) . "</p>";

    // Raiz quadrada
    echo "<p>sqrt($a): " . sqrt($a) . "</p>";

    // Arredondamentos
    echo "<p>round($b): " . round($b) . "</p>";
    echo "<p>ceil($b): " . ceil($b) . "</p>";
    echo "<p>floor($b): " . floor($b) . "</p>";

    // Parte inteira
    echo "<p>intval($b): " . intval($b) . "</p>";

    // Máximo e mínimo
    echo "<p>max($a, $b): " . max($a, $b) . "</p>";
    echo "<p>min($a, $b): " . min($a, $b) . "</p>";

    // Número aleatório
    echo "<p>rand(1, 100): " . rand(1, 100) . "</p>";

    echo "<hr>";

    // Conversões de base
    echo "<h2>Conversão de Bases</h2>";
    echo "<p>base_convert($numero, 10, 2): " . base_convert($numero, 10, 2) . "</p>";
    echo "<p>base_convert($numero, 10, 16): " . base_convert($numero, 10, 16) . "</p>";
    echo "<p>base_convert('11111111', 2, 10): " . base_convert('11111111', 2, 10) . "</p>";

    echo "<hr>";

    // Constante PI
    echo "<h2>Constante PI</h2>";
    echo "<p>M_PI: " . M_PI . "</p>";

    // Exemplo usando PI (área do círculo)
    $raio = 5;
    $area = M_PI * pow($raio, 2);
    echo "<p>Área de um círculo de raio $raio: $area</p>";

    echo "<hr>";

    // Hipotenusa (Teorema de Pitágoras)
    echo "<h2>Hipotenusa</h2>";
    echo "<p>hypot($cateto1, $cateto2): " . hypot($cateto1, $cateto2) . "</p>";

?>

</body>
</html>