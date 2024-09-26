<?php

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        try{
            
            if(isset($_GET['nome']) && isset($_GET['numero'])){
                
                $contatos = [];

                for($i = 0; $i < count($_GET['nome']); $i++){
                    
                    if (!empty($nome) && !empty($numero) && !isset($contatos[$nome]) && !in_array($numero, $contatos)) {
                        $contatos[$nome] = $numero;
                    }

                }

            }


        }catch(Exception $e){
            $e->getMessage();
        }

        echo '<pre>';
        print_r($contatos);
        echo '</pre>';

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
                    <input type="text" class='form-control' name='nome[]'>
                    <label for="numero">Numero</label>
                    <input type="text" class='form-control' name='numero[]'>
        
                <?php
                    }
                ?>
                <button type="submit" class='btn btn-primary mt-2'>Enviar</button>
            </form>
        </div>
    </div>


</body>
</html>