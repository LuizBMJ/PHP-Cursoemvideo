<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        //$num = 0x1a;
        //$num1 = 010;
        //echo "O valor da variavel é $num, ";
        //echo  $num1;

        //$v = 300;
        //var_dump($v);

        //$num = (integer) 3e2; // 3 x 10(2)
        //echo "O valor é $num";
        //var_dump($num);

        //$num = (int) "950";
        //var_dump($num);

        //$casado = true; true = 1 false = 0, null, etc
        //var_dump($casado);

        //$vet = [6, 2 ,"5" , 9 ,true , 4.2];
        //var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
    
</body>
</html>