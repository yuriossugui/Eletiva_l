<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    ?>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
                echo 'a raiz quadrada é: '. sqrt($_POST['x']);

            }catch(Exception $e){
                $e->getMessage();
            }
        }
    ?>
</body>
</html>