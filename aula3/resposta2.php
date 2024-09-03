<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        (int) $x = $_POST['valor1'];
        (int) $y = $_POST['valor2'];

        function somar(int $a, int $b):int{
            return $a + $b;
        }

        function subtracao(int $a, int $b):void{
            echo $a - $b;
        }


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{

                echo 'soma: '. somar($x,$y);
                
                echo 'subtracao '.subtracao($x,$y); 

            }catch(Exception $e){
                echo $e->getMessage();
            }
        }


    ?>

</body>
</html>