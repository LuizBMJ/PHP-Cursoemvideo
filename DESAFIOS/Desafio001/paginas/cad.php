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
                <h1>Resultado Final</h1>
                <?php
                    $num = $_GET["numero"];
                    $numAntecessor = $num - 1;
                    $numSucessor = $num + 1;

                    echo "<p> O número escolhido foi <strong>$num</strong></p>";
                    echo "<p> O seu antecessor é <strong>$numAntecessor</strong></p>";
                    echo "<p> O seu sucessor é <strong>$numSucessor</strong></p>";
                ?>
            </div>
            <div id="result-return">
                <p>
                    <a href="javascript:history.go(-1)">Voltar a página anterior</a>
                </p>
            </div>
            
        </div>
    </main>
</body>
</html>