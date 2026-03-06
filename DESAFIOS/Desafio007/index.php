<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php 
        $sal = $_GET["num1"]?? 1621;
        $salmin = 1621;
        $saldiv = intdiv($sal, $salmin);
        $salres = $sal % $salmin;

    ?>
    <main>
        <section id="salary">
            <h1>Informe seu salário</h1>
            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                <p>
                    <input 
                    type="number" name="num1" id="num1"
                    value="" placeholder="Salario (R$)" step="0.01" required
                    >
                </p>
                <p>
                    Considerando o salário minimo de <strong>R$ 1.621,00 </strong>
                </p>
                <input type="submit" value="Calcular">
            </form>
        </section>
        <section id="result">
            <h1>Resultado Final</h1>
            <p>
                Quem recebe um salário de <strong><?= "R$ " . number_format($sal, 2, ",", ".") ?></strong> 
                ganha <span class="res-destaque"><?= $saldiv ?> salários mínimos</span> 
                + <strong><?= "R$ " . number_format($salres, 2, ",", ".") ?></strong>.
            </p>
        </section>
    </main>
</body>
</html>