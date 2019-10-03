 <?php
 $preco = $_POST['preco'];
 if ($preco<12000) {
     $t1 = 1.05*$preco;  
 }
 elseif ($preco>12000 & $preco<25000) {
     $t2 = 1.25*$preco;    
 }
 else {
     $t3 = 1.35*$preco;
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
    Concessionária SP
  </div>
  <div class="card-body">
    <h5 class="card-title text-info text-center display-4"> Preço do Carro</h5>
    <p class="card-text text-center display-4 pt-4">
        <?="R$ ".$t3?>                             
    </p>
    <div class="text-center">
    <a href="form_custo.php" class="m-auto btn btn-primary">Voltar ao formulário</a>
    </div>

  
  </div>
</div>
</div>
</body>
</html>
