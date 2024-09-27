<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        try{
            if (isset($_GET['titulo'], $_GET['quantidade'])) {
                $livros = [];
                
                for ($i = 0; $i < count($_GET['titulo']); $i++) {
                    $titulo = $_GET['titulo'][$i];
                    $quantidade = (int)$_GET['quantidade'][$i]; 
    
                    $livros[$titulo] = $quantidade;
                }
    
                ksort($livros);
    
                echo '<div class="container mt-5">';
                echo '<h2>Lista de Livros Ordenada pelo Título</h2>';
                echo '<ul>';
                foreach ($livros as $titulo => $quantidade) {
                    echo '<li><strong>Título:</strong> ' . htmlspecialchars($titulo) . 
                         ' | <strong>Quantidade:</strong> ' . $quantidade . '</li>';
    
                    if ($quantidade < 5) {
                        echo '<div class="alert alert-danger">Atenção: Livro "' . htmlspecialchars($titulo) . '" está com baixa quantidade em estoque!</div>';
                    }
                }
                echo '</ul>';
                echo '</div>';
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
        
                    <label for="nome">Titulo</label>
                    <input type="text" class='form-control' name='titulo[]'>
                    <label for="numero">Quantidade</label>
                    <input type="text" class='form-control' name='quantidade[]'>
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