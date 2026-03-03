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
        <div id="result">
            <div id="result-header">
                <h1>Resultado do cadastro</h1>
                <?php
                    //var_dump($_GET) $_GET $_POST $_COOKIES $_REQUEST
                    $n = $_GET["nome"] ?? "sem nome";
                    $s = $_GET["sobrenome"] ?? "desconhecido";
                
                    echo "<p> Olá <strong>$n $s</strong>! Bem vindo ao meu site. </p>"
                ?>
            </div>
            <div id="result-return">
                <p>
                    <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
                </p>
            </div>
        </div>
    </main>
</body>
</html>