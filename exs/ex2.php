<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Atividade - EX2</title>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1><a href = "../">2 - Exercício</a></h1>
        <hr>
        <?php
            $aleT = rand (1, 100);

            echo "Tabuada do $aleT        <br>";
            for ($i = 0; $i <= 10; $i++)
            {
                $calc = $aleT * $i;

                echo 
                "
                    $aleT X $i = $calc     <br>
                ";
            }
        ?>
    </body>
</html>
<?php
?>