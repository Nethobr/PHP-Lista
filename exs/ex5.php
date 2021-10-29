<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Atividade - EX5</title>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1><a href = "../">5 - Exercício</a></h1>
        <hr>
        <?php
            $par    = 0;
            $res    = 0;
            do
            {
                $rand = rand (1, 6);

                $res = $rand % 2;

                echo "Valor gerado: $rand";

                if ($res == 0)
                {
                    $par ++;
                    echo " (PAR);       <br>";
                }
                else
                {
                    echo ";             <br>";
                }
            } while ($par != 12);
        ?>
    </body>
</html>