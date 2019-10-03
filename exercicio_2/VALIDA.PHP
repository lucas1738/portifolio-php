<?php

$nome = $_POST['nome'];
$data = $_POST['data'];
$email1 = $_POST['email'];

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
<body onload="carrega()">
<div class="container d-block mt-5">
<div class="card">
  <div class="card-header">
    Bem vindo
  </div>
  <div class="card-body">
    <h5 class="card-title"><?="Usuário: ".$nome?></h5>
     <p class="card-text"><?="Data de Nascimento: ".$data?></p>
     <p class="card-text"><?="Email: ".$email1?></p>
   
  </div>
</div>
</div>
<script>
    function carrega(){
  alert("cadastro efetuado com sucesso");
    } 
    </script>

</body>
</html>