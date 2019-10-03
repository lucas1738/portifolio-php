<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="../exercicio_2/style.css" rel="stylesheet">
</head>
<body style="background: #F9F9F9">
<div class="container shadow-lg mt-5 mb-5 p-3" id="container">
    <div id="shadow">

    
  <div class="card bg-info">


  <section id="authors">

      <div class="card m-3">
          <div class="card-body text-center">
              <img src="../imagens/perfil.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3 class="pt-2">Lucas Barbosa</h3>
              <h5 class="pt-2">Desenvolvedor Front End</h5>
              <p class="display-4 pt-3" id="main">"Desistir nunca foi uma opção"</p>
              <div class="d-flex justify-content-center">
                  <div class="p-4">
                      <a href="http://facebook.com">
                    <i class="text-white fa fa-facebook"></i>
                </a>
            </div>
            <div class="p-4">
                <a href="http://twitter.com">
                    <i class="text-white fa fa-twitter"></i>
                </a>
            </div>
                <div class="p-4">
                    <a href="http://instagram.com">
                    <i class="text-white fa fa-instagram"></i>
                  </a>
                </div>
                
              </div>
            </div>
        </div>
    </section>
        
  <!-- <img src="../imagens/tech.jpg" class="card-img-top" alt="..."> -->

  <div class="card-body">

  <section class="mt-5 p-4">
    <div class="container">
     
  
      <div class="slick-slider">
        <!-- <div>
           <span class="font-weight-bold text-primary"> Atividade 1 </span>
            <br>
        <a class="mt-3 btn btn-primary" href="exercicio1.php"><i class="fa fa-link"></i></a>
         </div> -->
        <div><span class="font-weight-bold"> <a id="items" href="exercicio1.php">Atividade 1</a>  </span></div>
        <div><span class="font-weight-bold"> <a id="items" href="projeto2.php">Atividade 2</a>  </span></div>
        <div><span class="font-weight-bold"> <a id="items" href="#">Atividade 3</a>  </span></div>
        <div><span class="font-weight-bold"> <a id="items" href="#">Atividade 4</a>  </span></div>
     
      </div>    


       
        </div>

  </section>

      
      <!-- <div class="btn-group" role="group" aria-label="Basic example">
          <a href="exercicio1.php" class="btn btn-primary">Atividade 1 </a>
          <a href="projeto2.php" class="btn btn-primary">Atividade 2 </a>
          <a href="#" class="btn btn-primary">Atividade 3 </a>
          <a href="#" class="btn btn-primary">Atividade 4 </a>
        </div> -->

    </div>
     
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

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    $('.slider').slick({
      infinite: true,
      slideToShow: 1,
      slideToScroll: 1
    });

    $('.slick-slider').slick({
  centerMode: true,
  slidesToShow: 1,
  dots: true,
  arrows: true,
  swipe: true,
 infinite: true,
  swipeToSlide: true,
  responsive: [
                            {
                              breakpoint: 768,
                              settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                              }
                            },
                            {
                              breakpoint: 560,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            }
                            
                          ]
  //adaptiveHeight: true,
});



  </script>
</body>
</html>