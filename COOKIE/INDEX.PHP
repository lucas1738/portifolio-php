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
    <form autocomplete="off" action="formulario.php" method="post">
    <div class="form-group">
    <label for="nome">Nome do Usuário</label>
    <input class="form-control d-block" name="nome" type="text">
    </div>
    <div class="form-group">
    <label for="nota1">Idade</label>
    <input class="form-control d-block" name="idade" type="text">
    </div>
   
 
     <button class="btn btn-info text-white btn-block" submit="">Enviar</button>
    </form>
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