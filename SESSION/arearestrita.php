<?php
session_start();

if(!isset($_SESSION['logou'])){
  session_destroy();
  header('Location: erro.php');
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="session.css">
</head>

<body style="background: #F9F9F9">
  <nav style="width: 100%" class="bg-success navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Premiere Play</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
        <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
            <i style="font-size: 30px" class="text-white fa fa-user"></i></a>
          <div aria-labelledby="userInfo" class="text-center shadow-lg dropdown-menu drop_menu"><a href="#"
              class="dropdown-item"><strong style="font-size:12px" class="d-block text-uppercase headings-font-family">
                <?=$_SESSION['mail']?>
                 </strong>
                 <small>Assinante Premiere</small></a>

                 <div class="dropdown-divider"></div>
                 <a href="#" class="text-success dropdown-item"> <?=$_SESSION['user']?></a>     
                 <div class="dropdown-divider"></div>
                              
       
            <div class="text-center">

              <a href="logout.php" id="drop-item" class="dropdown-item">Logout</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <section class="mt-5 mb-5">
    <!-- Nossas Pizzas -->
    <br>
    <div class="container mt-5 rounded" id="c2">
      <header>
        <h1 class="text-center text-success">Campeonato Brasileiro - 20ª Rodada</h1>

      </header>

      <div class="card-deck mt-5">
        <div style="border: 10px solid #f2f3f5" class="card shadow">

          <div class="container-fluid bg-light p-3">
            <div class="row">

              <div class="offset-3 text-center">
                <img style="width: 50px; heigth: 50px" class="card-img-bottom" src="../imagens/botafogo.png"
                  alt="Card image cap">
              </div>
              <div class="col-2 text-center">
                <i style="position: relative; top: 12px" class="display-5 fa fa-times"></i>
              </div>
              <div class="col-2 text-center">
                <img style="width: 50px; heigth: 50px" class="card-img-bottom" src="../imagens/spfc.png"
                  alt="Card image cap">

              </div>
            </div>

          </div>
          <div class="card-body bg-success text-center">
            <h6 class="card-title text-white text-center">Sáb 21/09/2019 Engenhão 11:00
              </h6'>
              <i class="mt-4 text-center text-white display-1 fa fa-play-circle"></i>

          </div>
        </div>


        <div style="border: 10px solid #f2f3f5" class="card shadow">

          <div class="container-fluid bg-light p-3">
            <div class="row">

              <div class="offset-3 text-center">
                <img style="width: 50px; heigth: 50px" class="card-img-bottom" src="../imagens/cruzeiro.png"
                  alt="Card image cap">
              </div>
              <div class="col-2 text-center">
                <i style="position: relative; top: 12px" class="display-5 fa fa-times"></i>
              </div>
              <div class="col-2 text-center">
                <img style="width: 50px; heigth: 50px" class="card-img-bottom" src="../imagens/flamengo.png"
                  alt="Card image cap">

              </div>
            </div>

          </div>
          <div class="card-body bg-success text-center">
            <h6 class="card-title text-white text-center">Sáb 21/09/2019 Mineirão 17:00
              </h6>
              <i class="mt-4 text-center text-white display-1 fa fa-play-circle"></i>

          </div>
        </div>


        <div style="border: 10px solid #f2f3f5" class="card shadow">

          <div class="container-fluid bg-light p-3">
            <div class="row">

              <div class="offset-3 text-center">
                <img style="width: 50px; heigth: 50px" class="card-img-bottom" src="../imagens/sccp.png"
                  alt="Card image cap">
              </div>
              <div class="col-2 text-center">
                <i style="position: relative; top: 12px" class="display-5 fa fa-times"></i>
              </div>
              <div class="col-2 text-center">
                <img style="width: 50px; heigth: 50px" class="card-img-bottom" src="../imagens/bahia.png"
                  alt="Card image cap">

              </div>
            </div>

          </div>
          <div class="card-body bg-success text-center">
            <h6 class="card-title text-white text-center">Sáb 21/09/2019 Arena Corinthians 19:00</h6'>
              <i class="mt-4 text-center text-white display-1 fa fa-play-circle"></i>

          </div>
        </div>


      </div>
      <div class="card-deck mt-5">



        <div style="border: 10px solid #f2f3f5" class="card shadow">

          <div class="container-fluid bg-light p-3">
            <div class="row">

              <div class="offset-3 text-center">
                <img style="width: 50px; heigth: 50px" class="card-img-bottom" src="../imagens/santos.png"
                  alt="Card image cap">
              </div>
              <div class="col-2 text-center">
                <i style="position: relative; top: 12px" class="display-5 fa fa-times"></i>
              </div>
              <div class="col-2 text-center">
                <img style="width: 50px; heigth: 50px" class="card-img-bottom" src="../imagens/gremio.png"
                  alt="Card image cap">

              </div>
            </div>

          </div>
          <div class="card-body bg-success text-center">
            <h6 class="card-title text-white text-center">Sáb 21/09/2019 Vila Belmiro 21:00
              </h6'>
              <i class="mt-4 text-center text-white display-1 fa fa-play-circle"></i>

          </div>
        </div>
        <div style="border: 10px solid #f2f3f5" class="card shadow">

          <div class="container-fluid bg-light p-3">
            <div class="row">

              <div class="offset-3 text-center">
                <img style="width: 50px; heigth: 50px" class="card-img-bottom" src="../imagens/inter.png"
                  alt="Card image cap">
              </div>
              <div class="col-2 text-center">
                <i style="position: relative; top: 12px" class="display-5 fa fa-times"></i>
              </div>
              <div class="col-2 text-center">
                <img style="width: 50px; heigth: 50px" class="card-img-bottom" src="../imagens/chape.png"
                  alt="Card image cap">

              </div>
            </div>

          </div>
          <div class="card-body bg-success text-center">
            <h6 class="card-title text-white text-center">Dom 22/09/2019 Beira-Rio 11:00
              </h6'>
              <i class="mt-4 text-center text-white display-1 fa fa-play-circle"></i>

          </div>
        </div>
        <div style="border: 10px solid #f2f3f5" class="card shadow">

          <div class="container-fluid bg-light p-3">
            <div class="row">

              <div class="offset-3 text-center">
                <img style="width: 50px; heigth: 50px" class="card-img-bottom" src="../imagens/fortaleza.png"
                  alt="Card image cap">
              </div>
              <div class="col-2 text-center">
                <i style="position: relative; top: 12px" class="display-5 fa fa-times"></i>
              </div>
              <div class="col-2 text-center">
                <img style="width: 50px; heigth: 50px" class="card-img-bottom" src="../imagens/palmeiras.png"
                  alt="Card image cap">

              </div>
            </div>

          </div>
          <div class="card-body bg-success text-center">
            <h6 class="card-title text-white text-center">Dom 22/09/2019 Castelão 16:00
              </h6'>
              <i class="mt-4 text-center text-white display-1 fa fa-play-circle"></i>

          </div>
        </div>

      </div>

    </div>

    <br>
  </section><!-- FIM Nossas Pizzas -->



  <footer class="py-3 bg-success text-white text-center" id="rodape">

    <div class="container">
      <div>

      </div>
      <div class="btn-group text-white my-3">
        <a href="http://facebook.com" target="_blank" class="text-success btn btn-light">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="http://twitter.com" target="_blank" class="text-success btn btn-light">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="http://instagram.com" target="_blank" class="text-success btn btn-light">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
      <small>
        <p class="text-white shadow-md">&copy;2019 - @GloboEsporte</p>
      </small>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>