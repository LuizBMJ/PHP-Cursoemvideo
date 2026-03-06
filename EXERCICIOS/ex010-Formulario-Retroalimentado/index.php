<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Retroalimentado</title>
</head>
<body>
    <?php 
    // Capturando os dados do Formulario Retroalimentado
    $valor1 = $_GET["numero1"] ?? 0;
    $valor2 = $_GET["numero2"] ?? 0;

    ?>
    <main>
        <form action="<?=  $_SERVER["PHP_SELF"]; ?>" method="get">
            <input type="number" name="numero1" id="numero2" value="<?=$valor1 ?>">
            <input type="number" name="numero2" id="numero2" value="<?=$valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p> A soma entre $valor1 e $valor2 é $soma </p>";

        ?>
    </section>
</body>
</html>