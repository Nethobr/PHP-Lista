<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Atividade - EX6</title>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1><a href = "../">6 - Exercício</a></h1>
        <hr>
        <?php
            $calc    = 0;

            do
            {
                $rand = rand (-10, 10);

                echo "Valor gerado: $rand   <br>";

                $calc = $calc + $rand;
            } while ($rand != 0);   //Fim DO WHILE

            echo 
            "
                Soma total: $calc
            ";
        ?>
    </body>
</html>