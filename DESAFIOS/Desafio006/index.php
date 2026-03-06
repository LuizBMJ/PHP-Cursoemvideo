<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php 
        $num1 = $_GET["num1"] ?? 0;
        $num2 = $_GET["num2"] ?? 1;
        $divint = intdiv($num1, $num2);
        $divres = $num1 % $num2;
    ?>
    <main>
        <section id="formulario">
            <h1>Anatomia de uma divisão</h1>
            <form action="<?=  $_SERVER["PHP_SELF"]; ?>" method="get">
                <p>
                    <input 
                    type="number" name="num1" id="inum1"
                    value="<?= $num1 ?>" required

                    >
                </p>
                <p>
                    <input 
                    type="number" name="num2" id="num2"
                    value="<?= $num2 ?>" required
                    >
                </p>
                <input type="submit" value="Analisar">
            </form>
        </section>
        <section id="result">
            <h1>Estrutura da divisão</h1>

            <article id="divisao">
                <div class="dividendo"><?= $num1 ?>
                    <div class="resto"><?= $divres ?>
                    </div>
                </div>
                <div class="divisor"><?= $num2 ?>
                    <div class="quociente" ><?= $divint ?></div>
                </div>
            </article>

        </section>
    </main>
</body>
</html>