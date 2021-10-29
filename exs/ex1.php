<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Atividade - EX1</title>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1><a href = "../">1 - Exercício</a></h1>
        <?php
            $par = 0;
            $calc = 0;
            $impar = 0;
            $medImpar = 0;

            for ($i = 0; $i < 100; $i++)
            {
                $reb = $i % 2;

                if ($reb == 0)
                {
                    $par++;
                }
                else
                {
                    $impar++;
                    $calc = $calc + $i;
                }
            }

            $medImpar = $calc/$impar;

            echo 
            "
                Pares: $par             <br>
                Impares: $impar         <br>
                Média impar: $medImpar  <br>
            ";
        ?>
        <hr>
    </body>
</html>
