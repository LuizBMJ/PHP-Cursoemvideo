<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php 
        $atual = date("Y"); // Pega o ano real do sistema
        $nasc = $_GET["nasc"] ?? 2000;
        $anoDestino = $_GET["ano"] ?? $atual;

        // Lógica simples de cálculo
        $idade = $anoDestino - $nasc;
    ?>
    <main>
        <section id="formulario">
            <h1>Calculadora de Idade</h1>
            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                <div class="input-group">
                    <label for="nasc">Em que ano você nasceu?</label>
                    <input type="number" name="nasc" id="nasc" min="1900" max="<?=($atual-1)?>" value="<?=$nasc?>" required>
                </div>

                <div class="input-group">
                    <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
                    <input type="number" name="ano" id="ano" min="1900" value="<?=$anoDestino?>" required>
                </div>

                <input type="submit" value="Qual será minha idade?">
            </form>
        </section>

        <section id="result">
            <h1>Resultado</h1>
            <?php if ($idade < 0): ?>
                <p class="aviso">Em <?=$anoDestino?>, você ainda não terá nascido!</p>
            <?php else: ?>
                <p>Quem nasceu em <?=$nasc?> chegará em <?=$anoDestino?> com:</p>
                <div class="idade-container">
                    <strong><?=$idade?></strong>
                    <span>anos de idade</span>
                </div>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>