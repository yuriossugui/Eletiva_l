<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Aula 1 PHP</title>
</head>
<body>
    
    <div class="d-flex justify-content-center" style="margin-top:5vh;">
        <h1>hoje é dia <?php echo date('d/m/Y'); ?></h1>
    </div>

    <div class="d-flex justify-content-center">
        <form action="resposta.php" method="POST">
            <input type="text" name="valor" class="form-control mb-2" style="width:30vw">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>