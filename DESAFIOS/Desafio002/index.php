<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <main>
        <div id="random">
            <div id="random-header">
                <h1>Trabalhando com números aleatórios</h1>
                <p>Gerando um número aleatorio entre 0 e 100...</p>

                <?php 
                    $numero = random_int(0, 100);
                    echo "<h1>$numero</h1>";
                ?>
                
            </div>
            <div id="random-buttom">
                <form method="post">
                    <button type="submit">Gerar outro</button>
                </form>
            </div>  
        </div>
    </main>
    
</body>
</html>