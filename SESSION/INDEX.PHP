<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background: #F9F9F9">
<div class="container pt-5" style="width: 550px">
    <div class="shadow" style="background:#f2f1f0; border: 20px solid #f7f6f5">
  <div class="card">


    <img src="../imagens/globo.jpg" class="card-img-top" alt="...">
    <div class="card-body">

    
      <form autocomplete="off" action="formulario.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input  type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
          placeholder="Digite seu email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input  type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
        </div>

        <div class="mt-4 text-center">
          <button type="submit" class="btn btn-success form-control">Logar</button>
        </div>
      </form>
    </div>
  </div>
</div>



</div>

<!-- <script>
    function mostraEmail(){

        var pega_email = document.getElementById("email1");
        var alerta_email = document.getElementById("alerta_email");
        
        if(pega_email.value.length == 0){
                  alerta_email.innerHTML = "Email é obrigatório";
               }
               if(!pega_email.value.length == 0){
                alerta_email.innerHTML = "Digite o email novamente abaixo";
               }
            }

            function alertaUser(){
                var pega_email = document.getElementById("email1");
                var pega_confirm = document.getElementById("email2");

                if(pega_confirm.value == pega_email.value){
                    
                } else{
                    alert("Os emails não coincidem");
                }
            


            }

</script> -->
</body>
</html>