<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body onload="carrega(),dis_radio()">
<div class="container d-block mt-5">
<div class="jumbotron" style="margin: 0 auto; width: 250px; padding-top: 20px">
    <form autocomplete="off" action="calculadora.php" method="post">
    <div class="form-group">
    
    <h3 class="display-5 text-center mb-3">Calculadora</h3>


    <div class="p-auto mb-4 mx-auto">
     <div class="btn-group btn-group-toggle mt-3 pl-4 px-auto" data-toggle="buttons">
    <label class="btn btn-outline-secondary"><input onclick="disradio()" type="radio" value="soma" name="operacao">+</label>
    <label class="btn btn-outline-secondary"><input onclick="disradio()" type="radio" value="sub" name="operacao">-</label>
    <label class="btn btn-outline-secondary"><input onclick="disradio()" type="radio" value="mult" name="operacao">*</label>
    <label class="btn btn-outline-secondary"><input onclick="disradio()" type="radio" value="div" name="operacao">/</label>
  </div>
    </div>

    <div class="form-group text-center">
    <label class="font-weight-bold" for="nota1">Primeiro Número</label>
    <input onblur="campoUm(), carrega(),dis_radio()" class="form-control d-block" id="num1" name="num1" type="text">
    <p class="text-danger" id="primeiro"></p>
    </div>
    <div class="form-group text-center">
    <label class="font-weight-bold" for="nota2">Segundo Número</label>
    <input onblur="campoDois(),carrega(),dis_radio()" class="form-control d-block" id="num2" name="num2" type="text">
    <p class="text-danger" id="segundo"></p>

    </div>
 

     

    

    <button id="botao" class="mt-5 btn btn-info text-white btn-block" type="submit">Enviar</button>
    </form>
</div>
</div>
<script>
        var num1 = document.getElementById("num1");
        var num2 = document.getElementById("num2");
        var primeiro = document.getElementById("primeiro");
        var segundo = document.getElementById("segundo");
    function desabilita(){
        var botao = document.getElementById("botao");
        
        if(num1.value.length == 0 || num2.value.length ==0){
            botao.classList.add("disabled");
        }
    }

    function campoUm(){
        if(num1.value.length == 0){
            primeiro.innerHTML = "Campo Obrigatório";
        }
        if(!num1.value.length == 0){
            primeiro.innerHTML = "";
        }
    }
    function campoDois(){
        if(num2.value.length == 0){
            segundo.innerHTML = "Campo Obrigatório";
        }
        if(!num2.value.length == 0){
            segundo.innerHTML = "";
        }
    }

 
</script>
<script
  src="https://code.jquery.com/jquery-3.4.1.slim.js"
  integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
  crossorigin="anonymous"></script>
<script type='text/javascript'>
    function carrega(){
        var num1 = document.getElementById("num1");
        var num2 = document.getElementById("num2");
        if(num1.value.length == 0 || num2.value.length ==0) {
            $('#botao').prop('disabled', true);
        } else {
            $('#botao').prop('disabled', false);
        }
      
    }

    function dis_radio(){
        if ($('input:radio[name="operacao"]:checked').length > 0) {
            $('#botao').prop('disabled', false);
        } else {
            $('#botao').prop('disabled', true);
        }
    }

</script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>