<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Atividade - EX7</title>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1><a href = "../">7 - Exercício</a></h1>
        <hr>
        <?php
            $anoAtual = date ('Y');
            $aumentoSal = 1.5;
            $sal        = 1000;
            $calc       = 0;
            
            $calc = ($sal * $aumentoSal) / 100;
            $sal = $sal + $calc;

            for ($i = 2017; $i <= $anoAtual; $i++)
            {
                $aumentoSal = $aumentoSal * 2;

                $calc = ($sal * $aumentoSal) / 100;

                $sal = $sal + $calc;

                echo
                "
                    ANO - $i    <br>
                    Aumento: R$ $calc ($aumentoSal%)
                    Salário atual: R$ $sal  
                    <hr>
                ";
            }

            $calc = ($sal * $aumentoSal) / 100;

            $sal =  number_format ($sal, 2);
            $calc = number_format ($calc, 2);
            echo 
            "
            Salário: R$ $sal     <br>
            Quantidade do aumento: R$ $calc ($aumentoSal%)

            ";
        ?>
    </body>
</html>