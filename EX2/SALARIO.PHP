<?php

$salario = $_POST['salario'];
$vendas = $_POST['vendas'];
$novo_salario = $salario + (1.04*$vendas);

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
<div class="container d-block mt-5">
<div class="card">
  <div class="card-header text-center">
    Relatório de vendas
  </div>
  <div class="card-body">
    <h5 class="card-title"><?="O salário na carteira é R$ ".$salario?></h5>
     <p class="card-text"><?="Foram vendidos R$ ".$vendas?></p>
     <p class="card-text"><?="O funcionário receberá R$ ".$novo_salario?></p>
   
  </div>
</div>
</div>


</body>
</html>