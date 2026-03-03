<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../estilos/resultado.css">
</head>
<body>
    <main>
        <div id="resultado">
            <div id="header">
                <h1>Conversor de Moedas v1.0</h1>
                <?php
                    $num = $_GET["numero"];
                    // troca vírgula por ponto
                    $num = str_replace(",", ".", $num);
                    // converte para número decimal
                    $num = floatval($num);
                    $dol = $num * 5.27;
                    // formata valores para padrão BR
                    $numFormatado = number_format($num, 2, ',', '.');
                    $dolFormatado = number_format($dol, 2, ',', '.');
                    echo "<p>Valor informado: <strong>R$ $numFormatado </strong></p>";
                    echo "<p>Valor convertido: <strong>US$ $dolFormatado </strong></p>";
                ?>
                <p><small>Cotação fixa de R$5,27 informada diretamente no código.</small></p>
            </div>
            <div id="return">
                <p>
                    <a href="javascript:history.go(-1)">Voltar</a>
                </p>
            </div>
        </div>
    </main>
</body>
</html>