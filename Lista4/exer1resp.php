<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function contarLetras($palavra){
            return strlen($palavra);
        }
    ?>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
                $x = $_POST['palavra'];
                $y = contarLetras($x);
                echo $y;

            }catch(Exception $e){
                $e->getMessage();
            }
        }
    ?>
</body>
</html>