<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{

                $valor = $_POST['valor'];
                $qtde_caracteres = strlen($valor);
                echo '<p>quantidade de caracteres '.$qtde_caracteres.'</p>';
                $maiusculo = strtoupper($valor);
                $minusculo = strtolower($valor);
                echo '<p> maiusculo '.$maiusculo.'</p>';
                echo '<p> minusculo '.$minusculo.'</p>';

                $menor = min(1,2,3,4,5,6);
                $maior = max(1,2,3,4,5);
                echo 'menor ' . $menor. ' maior ',$maior;

                

            }catch(Exception $e){
                echo $e->getMessage();
            }
        }


    ?>

</body>
</html>