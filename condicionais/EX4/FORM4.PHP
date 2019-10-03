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
<div class="jumbotron" style="margin: 0 auto; width: 250px; padding-top: 20px">
    <form autocomplete="off" action="numero.php" method="post">
    <div class="form-group text-center">
    <label for="num">Digite um número</label>
    <input class="form-control d-block" name="num" type="text">
    </div>
 
     <button class="btn btn-info text-white btn-block" submit="">Enviar</button>
    </form>
</div>
</div>
</body>
</html>