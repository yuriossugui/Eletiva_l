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
                $x = new DateTime($_POST['x']);
                $y = new DateTime($_POST['y']);

                $int = $x->diff($y);

                echo 'a diferença entre as datas são de: '.$int->y.' anos '.$int->m.' meses e ' . $int->d . ' dias ';

            }catch(Exception $e){
                $e->getMessage();
            }
        }
    ?>
</body>
</html>