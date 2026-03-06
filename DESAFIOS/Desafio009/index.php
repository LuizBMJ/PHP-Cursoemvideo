<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php 
        // Captura dos dados com valores padrão para evitar erros
        $val1 = $_GET["num1"] ?? 0;
        $peso1 = $_GET["peso1"] ?? 1;
        $val2 = $_GET["num2"] ?? 0;
        $peso2 = $_GET["peso2"] ?? 1;

        // Cálculo Média Simples
        $mediaSimples = ($val1 + $val2) / 2;

        // Cálculo Média Ponderada
        $somaPesos = $peso1 + $peso2;
        $mediaPonderada = ($somaPesos > 0) ? ($val1 * $peso1 + $val2 * $peso2) / $somaPesos : 0;
    ?>
    <main>
        <section id="formulario">
            <h1>Médias Aritméticas</h1>
            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                <div class="input-group">
                    <label for="num1">Valor 1</label>
                    <input type="number" name="num1" id="num1" value="<?=$val1?>" required>
                    <label for="peso1">Peso 1</label>
                    <input type="number" name="peso1" id="peso1" value="<?=$peso1?>" required>
                </div>

                <div class="input-group">
                    <label for="num2">Valor 2</label>
                    <input type="number" name="num2" id="num2" value="<?=$val2?>" required>
                    <label for="peso2">Peso 2</label>
                    <input type="number" name="peso2" id="peso2" value="<?=$peso2?>" required>
                </div>

                <input type="submit" value="Calcular Médias">
            </form>
        </section>

        <section id="result">
            <h1>Cálculo das Médias</h1>
            <p>Analisando os valores <strong><?=$val1?></strong> e <strong><?=$val2?></strong>:</p>
            <ul>
                <li>
                    <span>Média Aritmética Simples:</span>
                    <strong><?= number_format($mediaSimples, 2, ",", ".") ?></strong>
                </li>
                <li>
                    <span>Média Aritmética Ponderada:</span>
                    <strong><?= number_format($mediaPonderada, 2, ",", ".") ?></strong>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>