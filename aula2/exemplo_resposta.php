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
                $x = (int) $_POST['num'];
        
                if($x > 0){
                    echo 'numero positivo';
                }
                elseif($x == 0){
                    echo 'zero';
                }
                else{
                    echo 'numero negativo';
                }
            }catch(Exception $e){
                echo 'erro: '.$e->getMessage();
            }
        }
    ?>
</body>
</html>