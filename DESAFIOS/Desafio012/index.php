<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php 
        $total_segundos = $_GET["segundos"] ?? 0;
        $sobra = $total_segundos;

        // Semanas (604.800 segundos)
        $semanas = intdiv($sobra, 604800);
        $sobra = $sobra % 604800;

        // Dias (86.400 segundos)
        $dias = intdiv($sobra, 86400);
        $sobra = $sobra % 86400;

        // Horas (3.600 segundos)
        $horas = intdiv($sobra, 3600);
        $sobra = $sobra % 3600;

        // Minutos (60 segundos)
        $minutos = intdiv($sobra, 60);
        $segundos = $sobra % 60;
    ?>
    <main>
        <section id="formulario">
            <h1>Calculadora de Tempo</h1>
            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                <div class="input-group">
                    <label for="segundos">Qual é o total de segundos?</label>
                    <input type="number" name="segundos" id="segundos" min="0" step="1" value="<?=$total_segundos?>" required>
                </div>
                <input type="submit" value="Calcular">
            </form>
        </section>

        <section id="result">
            <h1>Totalizando tudo</h1>
            <p>Analisando o valor que você digitou, <strong><?=number_format($total_segundos, 0, "", ".")?> segundos</strong> equivalem a um total de:</p>
            <ul>
                <li><?=$semanas?> semanas</li>
                <li><?=$dias?> dias</li>
                <li><?=$horas?> horas</li>
                <li><?=$minutos?> minutos</li>
                <li><?=$segundos?> segundos</li>
            </ul>
        </section>
    </main>
</body>
</html>