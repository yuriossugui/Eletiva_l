<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        try{
        if (isset($_GET['codigo'], $_GET['nome'], $_GET['preco'])) {
            $produtos = [];
            
            for ($i = 0; $i < count($_GET['codigo']); $i++) {
                $codigo = $_GET['codigo'][$i];
                $nome = $_GET['nome'][$i];
                $preco = (float)$_GET['preco'][$i]; 

                if ($preco > 100) {
                    $preco *= 0.9; 
                }

                $produtos[$codigo] = [
                    'nome' => $nome,
                    'preco' => $preco
                ];
            }

            uasort($produtos, function($a, $b) {
                return strcmp($a['nome'], $b['nome']);
            });

            echo '<div class="container mt-5">';
            echo '<h2>Lista de Produtos Ordenada pelo Nome</h2>';
            echo '<ul>';
            foreach ($produtos as $codigo => $dados) {
                echo '<li><strong>Código:</strong> ' . htmlspecialchars($codigo) . 
                     ' | <strong>Nome:</strong> ' . htmlspecialchars($dados['nome']) . 
                     ' | <strong>Preço:</strong> R$ ' . number_format($dados['preco'], 2, ',', '.') . '</li>';
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
        
                    <label for="nome">Codigo</label>
                    <input type="text" class='form-control' name='codigo[]'>
                    <label for="numero">Nome</label>
                    <input type="text" class='form-control' name='nome[]'>
                    <label for="">Preço</label>
                    <input type="text" class='form-control' name='preco[]'>
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