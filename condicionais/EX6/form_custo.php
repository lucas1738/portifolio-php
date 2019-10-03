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
  
    <div class="jumbotron" style="margin: 0 auto; padding-top: 20px">
      
<div class="card mb-5">
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Custo de Fábrica</th>
      <th scope="col">% do Distribuidor</th>
      <th scope="col">% dos Impostos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Até R$ 12.000</td>
      <td>5</td>
      <td>isento</td>
    </tr>
    <tr>
      <td>Entre R$ 12.000 e R$ 25.000</td>
      <td>10</td>
      <td>15</td>
    </tr>
    <tr>
      <td>Acima de R$ 25.000</td>
      <td>15</td>
      <td>20</td>
    </tr>
  </tbody>
</table>
</div>

<div class="card w-50 bg-dark py-5 m-auto my-5">
<form autocomplete="off" action="custo.php" method="post">
        <div class="form-group display-4 text-white text-center py-3 w-75 m-auto">
        <label for="preco">Preço do carro</label>
        <input class="form-control d-block" name="preco" type="text">
        </div>
    
        <button class="btn btn-warning text-white btn-block w-75 m-auto" submit="">Enviar</button>
        </form>
    </div>
</div>
  
  
</div>

</div>
</body>
</html>