<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
                $x = (int) $_POST['num'] ?? 0;

                switch($x){
                    case 10:
                        echo 'nota A';
                        break;
                    case 9:
                        echo 'nota B';
                        break;
                    default:
                        echo 'nota C';
                        break;
                }

                //operador ternario
                $dado = 1;
                $d = ($dado >= 1) ? 'sim' : 'nao';
                echo $d;

                $i = 0;
                while($i <= 5){
                    echo $i;
                    $i++;
                }

                for($i=0;$i <= 5; $i++){
                    echo $i;
                }


            }catch(Exception $e){
                $e->getMessage();
            }
        }
    ?>
</body>
</html>