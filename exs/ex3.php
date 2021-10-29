<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Atividade - EX3</title>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1><a href = "../">3 - Exercício</a></h1>
        <hr>
        <?php 
            $joaoKg = 2.5;  //João peso
            $joseKg = 2.7;  //José peso

            $i              = 0;    //Contadores
            $semanaJoao     = 0;
            $semanaJose     = 0;
            do
            {
                if ($joaoKg < 5)
                {
                    $semanaJoao++;
                }

                if ($joseKg < 5)
                {
                    $semanaJose++;
                }
                $joaoKg += 0.215;
                $joseKg += 0.210;

                $i++;
            } while ($joaoKg <= 5 && $joseKg <= 5); //Fim DO while

            echo
            "
                Total de semanas: $i    <br>
                João: $semanaJoao       <br>
                José: $semanaJose       <br>
            " 
        ?>
    </body>
</html>