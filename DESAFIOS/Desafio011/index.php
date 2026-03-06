<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php 
        $preco = $_GET["preco"] ?? 0;
        $reajuste = $_GET["reajuste"] ?? 0;

        // Cálculo do novo valor
        $aumento = ($preco * $reajuste) / 100;
        $novoPreco = $preco + $aumento;
    ?>
    <main>
        <section id="formulario">
            <h1>Reajustador de Preços</h1>
            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                <div class="input-group">
                    <label for="preco">Preço do Produto (R$)</label>
                    <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>" required>
                </div>

                <div class="input-group">
                    <label for="reajuste">Qual será o percentual de reajuste? (<span id="p">0</span>%)</label>
                    <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" 
                           value="<?=$reajuste?>" oninput="mudaValor()">
                </div>

                <input type="submit" value="Reajustar" id="btn-reajuste">
            </form>
        </section>

        <section id="result">
            <h1>Resultado do Reajuste</h1>
            <p>O produto que custava <strong>R$ <?=number_format($preco, 2, ",", ".")?></strong>, com <strong><?=$reajuste?>% de aumento</strong> vai passar a custar <strong>R$ <?=number_format($novoPreco, 2, ",", ".")?></strong> a partir de agora.</p>
        </section>
    </main>

    <script>
        // Script para atualizar o número da porcentagem em tempo real
        function mudaValor() {
            p.innerText = reajuste.value;
        }
        // Inicializa o valor ao carregar a página
        mudaValor();
    </script>
</body>
</html>