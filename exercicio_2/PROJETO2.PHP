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
    <link href="../exercicio_2/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body onload="desabilita()" style="background: #F9F9F9">
<div id="second" class="container px-0 py-0 mb-5 mt-3 mx-auto shadow-lg">


<div id="second-inner" class="pt-5 pb-5">

  <div id="overlay" class="m-auto rounded">

    
  <div id="second-card" class="p-2 mx-auto card rounded">

  <div class="card-body">

  <div class="text-center">
  <a href="index.php" data-toggle="tooltip" data-placement="right" title="Voltar ao Portifólio" class="btn btn-light btn-circle btn-lg"><i class="fa fa-home"></i> </a>
  </div>

  <form autocomplete="off" action="validacao.php" method="post">
  <div class="form-group">
    <label class="text-white" for="user"></label>
    <input onblur="desabilita(),campoUm()" type="text" class="form-control" name="user" id="user" placeholder="Usuário">
  </div>
  <p class="text-warning" id="primeiro"></p>

  <div class="form-group">
    <label class="text-white" for="senha"></label>
    <input onblur="desabilita(),campoDois()" type="text" class="form-control" name="senha" id="senha" placeholder="Senha">
  </div>
  <p class="text-warning" id="segundo"></p>



<?php
    if($erro == 1){
      echo '<h5 class="text-warning text-center">Você deve se cadastrar para acessar a plataforma </h5>';
    } elseif ($erro == 2){
      
      echo '<h5 class="text-warning text-center">Usuário e/ou senha inválido(s) </h5>';

    }
?>


  
  <div class="text-center pt-3">
      <button id="botao" type="submit" class="btn btn-block btn-dark">Logar</button>
    </div>

    <div id="accordion-box" class="text-center mt-5">

    <div id="accordion">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                    <i id="icon" class="fa fa-arrow-circle-down"></i> <span id="icon-text">Novo Usuário?</span>
                  </div>
                </h5>
              </div>

              <div id="collapse1" class="collapse">
                <div class="card-body text-center">
          
               <a href="cadastrar.php"  class="btn btn-secondary">
              <i class="fa fa-user-plus fa-lg pr-2"></i> Cadastre-se
            </a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <div href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                    <i id="icon" class="fa fa-arrow-circle-down"></i> <span id="icon-text">Esqueceu sua senha?</span> 
                  </div>
                </h5>
              </div>

              <div id="collapse2" class="collapse">
                <div class="card-body">
                <a href="recuperar_senha.php"  class="btn btn-secondary">
              <i class="fa fa-key fa-lg pr-2"></i> Recuperar senha
            </a>
                </div>
              </div>
            </div>

                        
            </div>
          </div>
          </div>


    </div>
</form>
     </div>
     </div>
     


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
        if(user.value.length == 0 || senha.value.length == 0) {
            $('#botao').prop('disabled', true);
        } else {
            $('#botao').prop('disabled', false);
        }
      
    }



</script>

<script>

 var user = document.getElementById("user");
  var senha = document.getElementById("senha");

 var primeiro = document.getElementById("primeiro");
var segundo = document.getElementById("segundo");
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
</script>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
})
</script>

</body>
</html>