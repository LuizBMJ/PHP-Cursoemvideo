<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php 
        $num = $_GET["num1"] ?? 1;
        $raizQ = sqrt($num);
        $raizC = pow($num, 1/3); 

        $raizQFormatada = number_format($raizQ, 3, "," , ".");
        $raizCFormatada = number_format($raizC, 3, ",", ".");
    ?>
    <main>
        <section id="formulario">
            <h1>Informe um número</h1>
            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                <p>
                    <input 
                    type="number" name="num1" id="num1"
                    value="<?= $num ?>" required
                    >
                </p>
                <input type="submit" value="Calcuar Raízes">
            </form>
        </section>
        <section id="result">
            <h1>Resultado Final</h1>
            <p>
                Analisando o número <?= $num ?>, temos:
                <ul>
                    <li>A sua raiz quadrada é <?= $raizQFormatada?> </li>
                    <li>A sua raiz cúbica é <?= $raizCFormatada ?></li>
                </ul>
            </p>
        </section>
    </main>
</body>
</html>