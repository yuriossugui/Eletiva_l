<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Lista 3</title>
  </head>
  <body>

    <div class="d-flex justify-content-center mb-3">
        <h1>Lista 3</h1>
    </div>

    <div class="d-flex justify-content-center">

        <div class="row">
            <div class="col">
                <div class="card p-2 text-center" style="width:fit-content;">
                    <form action="/lista3resp.php" method="POST">
                        <!--EXER2-->
                        <h4>Exercicio 2</h4>
                        <label for="" class="form-label">Valor 1</label>
                        <input type="text" class="form-control" name="v1">
                        <label for="" class="form-label">Valor 2</label>
                        <input type="text" class="form-control" name="v2">
                        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                    </form>
                </div>
            </div>
            
            <div class="col p-2 card text-center">
                <form action="/lista3resp.php" method="POST">
                    <!-- EXER3 -->
                    <h4>Exercicio 3</h4>
                    <label for="" class="form-label">Valor A</label>
                    <input type="text" class="form-control" name="a">
                    <label for="" class="form-label">Valor B</label>
                    <input type="text" class="form-control" name="b">
                    <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                </form>
            </div>
        </div>

    </div>
  </body>
</html>