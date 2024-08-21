<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        try{
            $x = (int) $_POST['n1'] ?? 0;

            $horas = $x * 24;
            $minutos = $x * 24*60;
            $segundos = $x *24*60*60;
            
        }catch(Exception $e){
            echo 'Erro!'.$e->getMessage();
        }
    }

?>

<div class="d-flex justify-content-center">
    <h3>horas <?php echo $horas ?></h3>
    <h3>minutos <?php echo $minutos ?></h3>
    <h3>segundos <?php echo $segundos ?></h3>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>