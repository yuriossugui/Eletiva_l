<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Divisão</title>
</head>
<body>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        try{
            $x = $_POST['numero1'];
            $y = $_POST['numero2'];
    
            if($y == 0){
                $y = 1;
            }

            $v = $x / $y;

        }catch(Exception $e){
            echo 'Erro!'.$e->getMessage();
        }
    }

?>

<div class="d-flex justify-content-center">
    <h3>A divisão entre <?php echo $_POST['numero1']; ?> e <?php echo $_POST['numero2']; ?> é: <?php echo $v ?></h3>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>