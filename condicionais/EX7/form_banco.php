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
<div class="container d-block mt-5 mb-5">
  
    <div class="jumbotron" style="margin: 0 auto; padding-top: 20px">
      
<div class="card mb-5">
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Tipo</th>
      <th scope="col">Descrição</th>
      <th scope="col">Rendimento Mensal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Poupança</td>
      <td>3%</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Fundo de renda fixa</td>
      <td>4%</td>
    </tr>
   
  </tbody>
</table>
</div>

<div class="card w-50 bg-success py-5 m-auto my-5 border border-dark">
<form autocomplete="off" action="banco.php" method="post">
        <div class="form-group display-4 text-white text-center py-3 w-75 m-auto">
        <label for="valor">Valor do investimento</label>
        <input style="border: 2px solid green" class="form-control d-block" name="valor" type="text">
        </div>

        <div class="form-group w-75 m-auto pb-5">
              <select name="tipo" class="custom-select">
                <option selected>Selecione o tipo do investimento</option>
                <option value="1">Poupança</option>
                <option value="2">Fundo de renda fixa</option>
              </select>
        </div>
    
        <button class="btn btn-outline-light btn-block w-75 m-auto" submit="">Enviar</button>
        </form>
    </div>
</div>
  
  
</div>

</div>
</body>
</html>