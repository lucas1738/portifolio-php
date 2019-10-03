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
  <div class="card-header">
    Mostrando valor a partir do cookie
 
  </div>
  <div class="card-body">
    <h5 class="card-title"><?="Usuário: ".$_COOKIE["nome"]?></h5>
     <p class="card-text"><?="Tem  ".$_COOKIE["idade"]." anos"?></p>
     <div class="text-center">
    <a href="index.php" class="m-auto btn btn-primary">Voltar ao formulário</a>
    </div>
   
  </div>
</div>
</div>


</body>
</html>