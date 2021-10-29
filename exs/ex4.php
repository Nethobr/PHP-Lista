<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Atividade - EX4</title>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1><a href = "../">4 - Exercício</a></h1>
        <hr>
        
        <?php 
            $calc   = 0;        //Responsável pelo calculo
            $par    = 0;        //Valor par
            $impar  = 0;        //Valor impar

            for ($i = 0; $i < 10; $i++)
            {
                $aleT = rand (1, 10);

                $calc = $aleT % 2;

                if ($calc == 0)
                {
                    $par ++;
                }
                else
                {
                    $impar ++;
                }

                echo "Valor gerado: $aleT<br>";
            }

            echo 
            "
                <br>
                Valores pares gerados: $par       <br>
                Valores impares gerados: $impar   <br>
            ";
        ?>

    </body>
</html>