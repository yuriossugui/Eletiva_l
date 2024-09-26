<?php

function calcularMediaAritmetica(array $numeros) {
    if (count($numeros) === 0) {
        return 0;
    }
    
    $soma = array_sum($numeros);
    
    $media = $soma / count($numeros);
    
    return $media;
}

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        try{

            if(isset($_GET['aluno']) && isset($_GET['nota'])){

                $alunosEMedia = [];

                for($i = 0; $i < count($_GET['aluno']); $i++){
                    $alunosEMedia[$nome]
                }

            }

        }catch(Exception $e){
            $e->getMessage();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Lista 5</title>
</head>
<body>

    <div class='d-flex justify-content-center'>
        <div class='card p-2' style='width:fit-content'>
            <form action="" method="get">
                <?php for($i = 0; $i < 5; $i++){ ?>
        
                    <label for="nome">Nome</label>
                    <input type="text" class='form-control' name='aluno[]'>
                    <label for="numero">Nota1</label>
                    <input type="text" class='form-control' name='nota[]'>
                    <label for="numero">Nota2</label>
                    <input type="text" class='form-control' name='nota[]'>
                    <label for="numero">Nota3</label>
                    <input type="text" class='form-control' name='nota[]'>
                    <br>
                    <hr>
                    <br>
                    
                <?php
                    }
                ?>
                <button type="submit" class='btn btn-primary mt-2'>Enviar</button>
            </form>
        </div>
    </div>


</body>
</html>