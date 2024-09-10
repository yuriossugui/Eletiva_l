<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ?>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
                $p = $_POST['palavra1'];
                $p1 = $_POST['palavra2'];

                if(strpos($palavra1,$palavra2 !== false)){
                    echo 'a palavra esta contida na outra';
                }else{
                    echo 'a palavra nao esta contida';
                }

            }catch(Exception $e){
                $e->getMessage();
            }
        }
    ?>
</body>
</html>