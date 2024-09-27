<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        try{
            if (isset($_GET['nome'], $_GET['preco'])) {
                $produtos = [];
                
                for ($i = 0; $i < count($_GET['nome']); $i++) {
                    $nome = $_GET['nome'][$i];
                    $preco = (float)$_GET['preco'][$i]; 
                    
                    $precoComImposto = $preco * 1.15;
    
                    $produtos[$nome] = $precoComImposto;
                }
    
                asort($produtos);
    
                echo '<div class="container mt-5">';
                echo '<h2>Lista de Produtos Ordenada pelo Preço com Imposto</h2>';
                echo '<ul>';
                foreach ($produtos as $nome => $precoComImposto) {
                    echo '<li><strong>Nome:</strong> ' . htmlspecialchars($nome) . 
                         ' | <strong>Preço com Imposto:</strong> R$ ' . number_format($precoComImposto, 2, ',', '.') . '</li>';
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
        
                    <label for="nome">Nome</label>
                    <input type="text" class='form-control' name='nome[]'>
                    <label for="numero">Preço</label>
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