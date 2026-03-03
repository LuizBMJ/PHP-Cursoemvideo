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
                <h1>Conversor de Moedas v2.0</h1>
                <?php
                    $num = $_GET["numero"];
                    $num = str_replace(",", ".", $num);
                    $num = floatval($num);

                    // URL da API do Banco Central
                    $url = "https://api.bcb.gov.br/dados/serie/bcdata.sgs.1/dados/ultimos/1?formato=json";

                    // pega os dados da API
                    $response = file_get_contents($url);

                    // transforma JSON em array PHP
                    $data = json_decode($response, true);

                    // pega o valor da cotação
                    $cotacao = floatval($data[0]['valor']);
                    
                    $conversao = $num * $cotacao;

                    $numFormatado = number_format($num, 2, ',', '.');
                    $dolFormatado = number_format($conversao, 2, ',', '.');

                    echo "<p>Valor informado: <strong>R$ $numFormatado </strong></p>";
                    echo "<p>Valor convertido: <strong>US$ $dolFormatado </strong></p>";
                ?>

                <p><small>Cotação obtida diretamente do site do <strong><a href="https://www.bcb.gov.br/">Banco Central do Brasil</a></strong>.</small></p>
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