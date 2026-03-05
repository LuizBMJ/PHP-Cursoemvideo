<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
</head>
<body>
    <main>
        <pre>
            <?php 
            setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

            session_start();
            $_SESSION["TESTE"] = "FUNCIONOU";


            echo "<h1> SUPER GLOBAL GET</h1>";
            var_dump($_GET);

            echo "<h1> SUPER GLOBAL POST</h1>";
            var_dump($_POST);

            echo "<h1> SUPER GLOBAL REPOST</h1>";
            var_dump($_REQUEST);

            echo "<h1> SUPER GLOBAL COOKIE</h1>";
            var_dump($_COOKIE);

            echo "<h1> SUPER GLOBAL SESSION</h1>";
            var_dump($_SESSION);

            echo "<h1> SUPER GLOBAL ENV</h1>";
            var_dump($_ENV);

            echo "<h1> SUPER GLOBAL SERVER</h1>";
            var_dump($_SERVER);

            echo "<h1> SUPER GLOBAL GLOBALS</h1>";
            var_dump($GLOBALS);
            
            
            ?>
        </pre>
    </main>
</body>
</html>