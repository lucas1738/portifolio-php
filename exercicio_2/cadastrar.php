<?php

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="../exercicio_2/style.css" rel="stylesheet">

</head>
<body onload="desabilita()" style="background: #F9F9F9">

<div id="container_cadastro" class="container mt-5 pt-3 pb-5">

<h1 class="text-white mb-5 display-4 text-center">Cadastro de Usuário</h1>

<div id="card_cadastro" class="card text-center py-5 px-5 mb-5 w-50 m-auto p-3">


<form autocomplete="off" action="formulario.php" method="post">

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic"><i class="fa fa-user"></i></span>
  </div>
  <input onblur="desabilita(), campoUm()" type="text" class="form-control" placeholder="Usuário" name="user" id="user" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p class="text-danger text-left" id="primeiro"></p>


<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic"><i class="fa fa-lock"></i></span>
  </div>
  <input onblur="desabilita(),campoDois()" type="text" class="form-control" placeholder="Senha" name="senha" id="senha" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p class="text-danger text-left" id="segundo"></p>


<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic"><i class="fa fa-lock"></i></span>
  </div>
  <input onblur="desabilita(),campoTres()" type="text" class="form-control" placeholder="Confirmar Senha" name="senha_confirm" id="senha_confirm" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p class="text-danger text-left" id="terceiro"></p>


<button onclick="alerta()" id="botao" type="submit" class="btn btn-block btn-info">Cadastrar</button>
<a href="projeto2.php" class="mt-3 btn btn-block btn-secondary">Voltar ao Login</a>

<?php
    if($erro == 1){
       
      echo '<h5 class="pt-4 text-center text-danger">As senhas digitadas não coincidem</h5>';

    } 
?>

</div>

</div>



</div>


<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
  
  <script type='text/javascript'>
    function desabilita(){
        var user = document.getElementById("user");
        var senha = document.getElementById("senha");
        var senha_confirm = document.getElementById("senha_confirm");

        if(user.value.length == 0 || senha.value.length == 0 || senha_confirm.value.length == 0){
            $('#botao').prop('disabled', true);
        } else {
            $('#botao').prop('disabled', false);
        }
      
     
    }

    function alerta(){
      var user = document.getElementById("user");
        var senha = document.getElementById("senha");
        var senha_confirm = document.getElementById("senha_confirm");
      if((user.value.length !==0 && senha.value.length !==0 && senha_confirm.value.length !==0) &&
      (senha.value == senha_confirm.value)){
        alert("Usuário cadastrado com sucesso");
    }
    }




   function campoUm(){

       if(user.value.length == 0){
           primeiro.innerHTML = "Campo Obrigatório";
       }
       if(!user.value.length == 0){
           primeiro.innerHTML = "";
       }
   }
   function campoDois(){
       if(senha.value.length == 0){
           segundo.innerHTML = "Campo Obrigatório";
       }
       if(!senha.value.length == 0){
           segundo.innerHTML = "";
       }
   }
   function campoTres(){
       if(senha_confirm.value.length == 0){
           terceiro.innerHTML = "Campo Obrigatório";
       }
       if(!senha_confirm.value.length == 0){
           terceiro.innerHTML = "";
       }
   }

</script>

</body>
</html>