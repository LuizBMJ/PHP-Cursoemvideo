<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php 
        $saque = $_GET["saque"] ?? 0;
        $resto = $saque;

        // Notas de 100
        $tot100 = intdiv($resto, 100);
        $resto %= 100;

        // Notas de 50
        $tot50 = intdiv($resto, 50);
        $resto %= 50;

        // Notas de 10
        $tot10 = intdiv($resto, 10);
        $resto %= 10;

        // Notas de 5
        $tot5 = intdiv($resto, 5);
        $resto %= 5;
    ?>
    <main>
        <section id="formulario">
            <h1>Caixa Eletrônico</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <div class="input-group">
                    <label for="saque">Qual valor você deseja sacar? (R$)*</label>
                    <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
                    <small>*Notas disponíveis: R$100, R$50, R$10 e R$5</small>
                </div>
                <input type="submit" value="Sacar">
            </form>
        </section>

        <section id="result">
            <h1>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h1>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li><img src="imagens/notade100reais.jpg" alt="Nota de 100" class="nota"> x<?=$tot100?></li>
                <li><img src="imagens/notade50reais.jpg" alt="Nota de 50" class="nota"> x<?=$tot50?></li>
                <li><img src="imagens/notade10reais.jpg" alt="Nota de 10" class="nota"> x<?=$tot10?></li>
                <li><img src="imagens/notade5reais.jpg" alt="Nota de 5" class="nota"> x<?=$tot5?></li>
            </ul>
        </section>
    </main>
</body>
</html>