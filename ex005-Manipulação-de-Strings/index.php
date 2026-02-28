<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <?php 
        /* ESCAPE SEQUENCES
        \n = Nova linha
        \t = Tabulação horizontal
        \\ = Barra invertida
        \$ = Sinal de cifrão
        \u{} = Codepoint Unicode
        */

        //$nome = "Gustavo";
        //$sobrenome = "Guanabara";
        //echo "$nome $sobrenome";
        //echo '$nome $sobrenome';

        //const CANAL = "Curso em Vídeo \u{1F499}";
        //echo "Eu adoro o " . CANAL;

        //echo date('s');

        //$nom = "Rodrigo";
        //$snom = "Nogueira";

        //echo "$nom "Minotauro" $snom";
        //echo '$nom "Minotauro" $snom';
        //echo "$nom \"Minotauro\" $snom";

        $curso = "PHP";
        $ano = date('Y');

        echo <<< FRASE
            Estou estudando 
                    $curso em $ano
        FRASE;

        echo <<< 'FRASE'
            Estou estudando 
                    $curso em $ano
        FRASE;
    ?>
</body>
</html>