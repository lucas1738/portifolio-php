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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link href="../exercicio_2/style.css" rel="stylesheet">
</head>

<body onload="remove()" style="background: #F9F9F9">
    <header id="main-header">
        <div class="header-content">
            <div>
                <h1 class="pb-2">Painel de Controle</h1>
            </div>

            <div>

                <div class="dropdown show">
                    <i id="user-icon" class="fa fa-user fa-2x text-white" id="dropdownMenuLink"
                        data-toggle="dropdown"></i>

                    <div class="text-center shadow-lg dropdown-menu dropdown-menu-right">
                        <a href="#">
                            <strong style="font-size:12px" class="d-block text-uppercase headings-font-family">
                                Bem vindo <?=$_SESSION['user']?>
                            </strong>
                            <small>Painel de Controle</small></a>

                        <div class="dropdown-divider"></div>
                        <div id="divisao" class="text-center">

                          <a href="recuperar_senha.php"> Redefinir senha </a>
                        </div>
                        <div class="dropdown-divider"></div>


                        <div id="divisao" class="text-center">

                            <a id="divisao" href="logout.php">Logout</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </header>

    <div id="main-bread">
            <div class="bread-content">
              <div>
                 <h2><i id="icon-nav" class="fa fa-cog mr-3"></i>Dashboard</h2>
              </div>
          
              <div>
          
              </div>
            </div>
          </div>

  <section class="mt-3 p-4 mb-5">
    <div class="row">
      <div class="col-9">
          <div id="card-general">
              <div class="table-responsive-md">
                  <table class="table table-striped" id="myTable">
                    <thead class="bg-info text-white">
                      <tr>
                        <th id="disabled">#</th>
                        <th>Título</th>
                        <th>Categorias</th>
                        <th>Data</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="bg-light text-dark">
                      <tr>
                        <td>1</td>
                        <td>Back-End</td>
                        <td>PHP com Laravel</td>
                        <td>03/10/2018</td>
                        <td>
                          <a href="#" class="btn btn-secondary">
                            <i class="fa fa-angle-double-right"></i> Detalhes
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Front-End</td>
                        <td>Bootstrap 4</td>
                        <td>12/02/2019</td>
                        <td>
                          <a href="#" class="btn btn-secondary">
                            <i class="fa fa-angle-double-right"></i> Detalhes
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Front-End</td>
                        <td>Materialize</td>
                        <td>13/05/2018</td>
                        <td>
                          <a href="#" class="btn btn-secondary">
                            <i class="fa fa-angle-double-right"></i> Detalhes
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Front-End</td>
                        <td>HTML & CSS</td>
                        <td>14/05/2019</td>
                        <td>
                          <a href="#" class="btn btn-secondary">
                            <i class="fa fa-angle-double-right"></i> Detalhes
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Back-End</td>
                        <td>Python com Django</td>
                        <td>22/05/2018</td>
                        <td>
                          <a href="#" class="btn btn-secondary">
                            <i class="fa fa-angle-double-right"></i> Detalhes
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Back-End</td>
                        <td>Java com Spring</td>
                        <td>16/07/2018</td>
                        <td>
                          <a href="#" class="btn btn-secondary">
                            <i class="fa fa-angle-double-right"></i> Detalhes
                          </a>
                        </td>
                      </tr>
                      <tr>
                          <td>7</td>
                          <td>Mobile</td>
                          <td>React Native</td>
                          <td>02/03/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                      <tr>
                          <td>8</td>
                          <td>Mobile</td>
                          <td>Flutter</td>
                          <td>02/09/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                      <tr>
                          <td>9</td>
                          <td>Back-End</td>
                          <td>Node.js</td>
                          <td>27/10/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                      <tr>
                          <td>10</td>
                          <td>BDA</td>
                          <td>SQL</td>
                          <td>13/05/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                      <tr>
                          <td>11</td>
                          <td>BDA</td>
                          <td>DER</td>
                          <td>03/11/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                      <tr>
                          <td>12</td>
                          <td>BDA</td>
                          <td>SGBD</td>
                          <td>05/07/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                      <tr>
                          <td>13</td>
                          <td>Front-End</td>
                          <td>React</td>
                          <td>10/07/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                      <tr>
                          <td>14</td>
                          <td>Back-End</td>
                          <td>Java Básico</td>
                          <td>12/03/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                      
                      <tr>
                          <td>15</td>
                          <td>Back-End</td>
                          <td>Ruby on Rails</td>
                          <td>02/09/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>16</td>
                          <td>Mobile</td>
                          <td>Ionic 3</td>
                          <td>08/09/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>17</td>
                          <td>Front-End</td>
                          <td>CSS Grid</td>
                          <td>09/11/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>18</td>
                          <td>BDA</td>
                          <td>Comandos DDL</td>
                          <td>07/11/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>19</td>
                          <td>Back-End</td>
                          <td>API com Python e Django</td>
                          <td>02/03/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td>20</td>
                          <td>Back-End</td>
                          <td>PHP com Symphony</td>
                          <td>02/12/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>21</td>
                          <td>Front-End</td>
                          <td>Primefaces</td>
                          <td>07/10/2019</td>
                          <td>
                            <a href="#" class="btn btn-secondary">
                              <i class="fa fa-angle-double-right"></i> Detalhes
                            </a>
                          </td>
                        </tr>
                        
                      
                     
                   
                   
                        </tbody>
                  </table>
      
            </div>
      </div>
      </div>

      <div class="col-md-3">
          <div class="card text-center bg-info text-white mb-3">
            <div class="card-body">
              <h3>Postagens</h3>
              <h4 class="display-4">
                <i class="fa fa-pencil"></i> 15
              </h4>
              <a href="#" class="btn btn-outline-light btn-sm">Ver mais</a>
            </div>
          </div>

          <div class="card text-center bg-info text-white mb-3">
            <div class="card-body">
              <h3>Categorias</h3>
              <h4 class="display-4">
                <i class="fa fa-folder"></i> 4
              </h4>
              <a href="#" class="btn btn-outline-light btn-sm">Ver mais</a>
            </div>
          </div>

          <div class="card text-center bg-info text-white mb-3">
            <div class="card-body">
              <h3>Usuários</h3>
              <h4 class="display-4">
                <i class="fa fa-users"></i> 3
              </h4>
              <a href="#" class="btn btn-outline-light btn-sm">Ver mais</a>
            </div>
          </div>

          <div class="card text-center bg-info text-white mb-3">
            <div class="card-body">
              <h3>Oportunidades</h3>
              <h4 class="display-4">
                <i class="fa fa-briefcase"></i> 20
              </h4>
              <a href="#" class="btn btn-outline-light btn-sm">Ver mais</a>
            </div>
          </div>
        </div>

    </div>
    

   </section>
   


  <footer id="footer" class="py-3 text-white text-center" id="rodape">

    <div class="container">
      <div>

      </div>
      <div class="btn-group text-white my-3">
        <a href="http://facebook.com" target="_blank" class="text-info btn btn-light">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="http://twitter.com" target="_blank" class="text-info btn btn-light">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="http://instagram.com" target="_blank" class="text-info btn btn-light">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
      <small>
        <p class="text-white shadow-md">&copy;2019 - @PaineldeControle</p>
      </small>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>



<script>
  // Get the current year for the copyright
  $('#year').text(new Date().getFullYear());

  function remove() {
    $("#disabled").removeClass("sorting_asc");
}


</script>


<script>

  // $(document).ready(function() {
//     $('#myTable').DataTable( {
//         "pagingType": "full_numbers"
//     } );
// } );

$(document).ready(function () {
  $('#myTable').dataTable({
    "pagingType": "full_numbers",
      "aoColumnDefs": [
         {
             "bSortable": false,
             "aTargets": [ 1, 2,3, 4, 0 ]
         }
      ]
  });




//   $('#myTable').dataTable( {
// "aoColumnDefs": [
//     { 'bSortable': false, 'aTargets': [ 0 ][ 4 ] }
//  ]});
});
</script>
</body>

</html>