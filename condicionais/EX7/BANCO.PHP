 <?php
 $valor = $_POST['valor'];
 $tipo = $_POST['tipo'];
  
  switch ($tipo){
    case 1:
      $out = "Poupança";
      $valor = $valor*1.03;
      break;
      case 2:
      $out = "Fundo de renda fixa";
      $valor = $valor*1.04;
      break;
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container m-auto pt-5">
<div class="card">
  <div class="card-header text-center display-3">
    Banco Banrisul
  </div>
  <div class="card-body">
    <h5 class="card-title text-info text-center display-4"> <?= $out ?> </h5>
    <p class="card-text text-center display-4 pt-4">
        <?="R$ ".$valor?>                             
    </p>
    <div class="text-center">
    <a href="form_banco.php" class="m-auto btn btn-primary">Voltar ao formulário</a>
    </div>

  
  </div>
</div>
</div>
</body>
</html>
