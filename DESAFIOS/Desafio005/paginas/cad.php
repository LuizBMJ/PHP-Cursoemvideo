<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Número Real</title>
    <link rel="stylesheet" href="../estilos/resultado.css">
</head>
<body>
    <main>
        <div id="resultado">
            <div id="header">
                <h1>Analisador de Número Real</h1>

                <?php
                    // pega o número digitado
                    $num = $_GET["numero"];

                    // remove espaços
                    $num = trim($num);

                    // separa parte inteira e decimal usando vírgula
                    $partes = explode(",", $num);

                    $parteInteira = $partes[0];
                    $parteDecimal = isset($partes[1]) ? $partes[1] : "0";

                    // monta parte fracionária no formato 0,xxx
                    $parteFracionaria = "0," . $parteDecimal;

                    // exibição
                    echo "<p>Analisando o número <strong>$num</strong> informado pelo usuário:</p>";
                    echo "<ul>";
                    echo "<li>A parte inteira do número é <strong>$parteInteira</strong></li>";
                    echo "<li>A parte fracionária do número é <strong>$parteFracionaria</strong></li>";
                    echo "</ul>";
                ?>
                
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