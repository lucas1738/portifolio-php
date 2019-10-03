<?php
session_start();

$exibeSenha = false;    

if(isset($_SESSION['user'])){
    $exibeSenha = true;
}

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
<body onload="desabilita();" style="background: #F9F9F9">

<div id="container_senha" class="container mt-5 mb-5 pt-3 pb-5">

<h1 class="text-white mb-5 display-4 text-center">Redefinição de Senha</h1>

<div id="card_senha" class="card text-center py-3 px-5 mb-5 w-50 m-auto p-3">


<form autocomplete="off" action="senha.php" method="post">

<!-- <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic_senha"><i class="fa fa-user"></i></span>
  </div>
  <input onblur="desabilita();" type="text" class="form-control" placeholder="Usuário" id="user" aria-label="Username" aria-describedby="basic-addon1">
</div> -->

<h4><?= $exibeSenha ? 'Usuário: '.$_SESSION['user'] : 'Acesso restrito a usuários'; ?></h4>

<div id="accordion-box" class="text-center mt-3">

    <div id="accordion">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <div  href="#collapse1" data-toggle="<?= $exibeSenha ? 'collapse' :'' ?>" data-parent="#accordion">
                    <i id="icon" class="fa fa-arrow-circle-down"></i> <span id="icon-text">Defina a nova senha</span>
                  </div>
                </h5>
              </div>

              <div id="collapse1" class="collapse">
                <div class="card-body text-center">
          
                <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic_senha"><i class="fa fa-lock"></i></span>
  </div>
  <input onblur="desabilita(),campoUm()" type="text" class="form-control" placeholder="Senha" name="senha" id="senha" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p class="text-danger text-left" id="primeiro"></p>


<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic_senha"><i class="fa fa-lock"></i></span>
  </div>
  <input onblur="desabilita(),campoDois()" type="text" class="form-control" placeholder="Confirmar Senha" name="senha_confirm" id="senha_confirm" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p class="text-danger text-left" id="segundo"></p>
                                 
    </div>
  </div>




</div>

</div>


<button onclick="alerta()" style="display: <?= $exibeSenha ? 'block' : 'none' ?>" id="botao" type="submit" class="mt-3 mb-4 btn btn-block btn-success">Alterar Senha</button>

<a href="projeto2.php" style="display: <?= $exibeSenha ? 'none' : 'block' ?>"  class="mt-3 mb-4 btn btn-success btn-block"> Voltar ao Login </a href="projeto2.php">
</form>

<a style="display: <?= $exibeSenha ? 'block' : 'none' ?>" href="projeto2.php" class="mt-3 btn btn-block btn-secondary">Voltar ao Login</a>


<?php
    if($erro == 1){
       
      echo '<h5 class="text-center text-danger">A senha digitada é igual à senha atual. Digite uma senha diferente</h5>';

    } elseif($erro == 2){
      echo '<h5 class="text-center text-danger">As senhas digitadas não coincidem</h5>';

    }
?>

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
    
        var senha = document.getElementById("senha");
        var senha_confirm = document.getElementById("senha_confirm");

        if(senha.value.length == 0 || senha_confirm.value.length == 0){
            $('#botao').prop('disabled', true);
        } else {
            $('#botao').prop('disabled', false);
        }
      
        // if(senha.value == senha_confirm.value && !senha.value == 0 && !senha_confirm.value == 0){
        //     $('#botao').prop('disabled', false);

        // } else {
        //     $('#botao').prop('disabled', true);
        // }
    }

 



</script>

<script>

 var user = document.getElementById("user");
  var senha = document.getElementById("senha");
  var senha_confirm = document.getElementById("senha_confirm");

 var primeiro = document.getElementById("primeiro");
var segundo = document.getElementById("segundo");
    function campoUm(){

        if(senha.value.length == 0){
            primeiro.innerHTML = "Campo Obrigatório";
        }
        if(!senha.value.length == 0){
            primeiro.innerHTML = "";
        }
    }
    function campoDois(){
        if(senha_confirm.value.length == 0){
            segundo.innerHTML = "Campo Obrigatório";
        }
        if(!senha_confirm.value.length == 0){
            segundo.innerHTML = "";
        }
    }

    function alerta(){
  
        var senha = document.getElementById("senha");
        var senha_confirm = document.getElementById("senha_confirm");
      if((senha.value.length !==0 && senha_confirm.value.length !==0) &&
      (senha.value == senha_confirm.value)){
        alert("Senha redefinida com sucesso");
    }
    }
</script>

</body>
</html>