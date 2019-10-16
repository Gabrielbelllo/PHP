<?php   
$n1 = $_GET['numero1'];

$n2 = $_GET['numero2'];

$n3 = $_GET['numero3'];

$resultado = ($n1 + $n2 + $n3) /3;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        <form class="form-horizontal" method="get" action="dados.php">
                <fieldset>
                
                <!-- Form Name -->
                <legend>Calcular</legend>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="numero1">Número 1 </label>  
                  <div class="col-md-4">
                  <input id="numero1" name="numero1" type="text" placeholder="" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="numero2">Número 2 </label>  
                  <div class="col-md-4">
                  <input id="numero2" name="numero2" type="text" placeholder="" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="numero3">Número 3</label>  
                  <div class="col-md-4">
                  <input id="numero3" name="numero3" type="text" placeholder="" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
                  <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
                  </div>
                </div>
                
                </fieldset>
                </form>
                <div>
                    Resultado : <?php echo $resultado; ?>


                </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  </body>
                
    
</body>
</html>