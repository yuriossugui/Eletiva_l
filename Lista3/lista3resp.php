<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Resposta lista 3</title>
  </head>
  <body>

    <div class="d-flex justify-content-center">
        
        <div class="row">

            <div class="col card text-center p-2">
                <h3>Exercicio 2 resposta:</h3>
                <!-- EXERCICIO 2 OUTPUT -->
                <h4>
                    <?php
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        try{

                            $v1 = $_POST['v1'];
                            $v2 = $_POST['v2'];
            
                            if($v1 == $v2){
                                $s = $v1 + $v2;
                                $t = 3 * $s;
                                echo $t;     
                            }else{
                                $s = $v1 + $v2;
                                echo $s;
                            }
                        }catch(Exception $e){ 
                            echo $e->getMessage();
                        }
                    }
                    ?>
                </h4>
            </div>

            <div class="col card text-center p-2">
                <h3>Exercicio 3 resposta:</h3>
                <!-- EXERCICIO 3 OUTPUT -->
                <h4>
                    <?php
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        try{
                            $a = $_POST['a'];
                            $b = $_POST['b'];

                            if($a > $b){
                                echo $b;$a;
                            }else{
                                echo $a;$b;
                            }
                        }catch(Exception $e){ 
                            echo $e->getMessage();
                        }
                    }
                    ?>
                </h4>
            </div>

        </div>

    </div>

  </body>
</html>