<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tags</title>
</head>
<body>
    <h1>
        Exemplo de PHP
    </h1>
    <?
        date_default_timezone_set("America/Manaus");
        echo "<p> Hoje é dia  " . date('d/M/Y </p>');
        echo "<p> E a hora atual é " . date('G:i:s </p>');
    ?>
</body>
</html>