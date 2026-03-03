<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Constantes</title>
</head>
<body>
    <h1>
        <?php 
            $nome = "Jorge"; //Variavel
            $sobrenome = "Mercer";

            const PAIS = "Brasil"; //Constante

            $nome = "Luiz";
            $sobrenome = "Bevilacqua";

            echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
        ?>
    </h1>
    
</body>
</html>