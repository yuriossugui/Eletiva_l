<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Media de notas</title>
</head>
<body>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        try{
            $x = $_POST['n1'];
            $y = $_POST['n2'];
            $z = $_POST['n3'];

            $v = ($x + $y + $z) / 3;

        }catch(Exception $e){
            echo 'Erro!'.$e->getMessage();
        }
    }

?>

<div class="d-flex justify-content-center">
    <h3>A média é: <?php echo $v ?></h3>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>