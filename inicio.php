<!doctype html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8"> <!-- tag para o navegador identificar vários caracteres diferentes -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">  
<link rel="stylesheet" href="https://getbootstrap.com.br/docs/3.3/components/"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
  crossorigin="anonymous" />
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
crossorigin="anonymous"></script>
<title>Início</title>
    </head>
    <body>
    <?php
    include "reutilizaveis/cabecalho.html";
    if (isset($_GET['r'])) {
        echo ("<script>alert('" . $_GET['r'] . "');</script>");
    }
    ?>

    <script>
        document.getElementById("inicio").classList.add("active")
    </script>
    <div class="jumbotron align-item-center d-flex flex-column justify-content-center pt-3"> 
      <div class="row"> 
                 <div class="col">
                  <h1><b>ALUGUE SEU IMÓVEL</b></h1>
                  <h1><b>SEM COMPLICAÇÃO</b></h1><br>
                  <h4>Administramos seu imóvel nas plataformas<br> de locação</h4>
                  <a href="sobre.php">
                  <button type="button" class="btn btn-success">CONHEÇA A HELPER</button>
  </a>
                </div>
                <div class="col">
                  <img src="img/plataformas2.png" width="233" height="91,6167"> 
                </div>
            </div>
  </div>   
            
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-6 ml-auto">   
                </br></br>
                <h3>Somos a sua nova solução em administração de imóveis.</h3></br>
                <h6>As Plataformas de locação por temporada surgiram para revolucionar o modo
                   de locação de imóveis. Elas se tornaram a opção mais acessível do que as redes
                    de hotelaria, atraindo cada vez mais turistas e profissionais que precisam de uma
                     estadia econômica, curta e segura. Oferecendo alternativas como a locação de um
                      quarto ou o imóvel completo.</h6>
                  </br>
                  <a href="sobre.php">
                  <button type="button" class="btn btn-success">CONHEÇA A HELPER</button>
  </a>
                </div>
                <div class="col-lg-6 ml-auto">
                </br></br>
                <div class="container">
                  <div class="row">
                      <div class="col-lg-7 mx-auto">
        
                          <div class="card-body p-0">
                            
                            <img src="img/aluguel.png" width="504px" height="375,417px">
                          </div>     
                      </div>
                  </div>
              </div>
              </div>
            </div> 
  </div>
  <div class="jumbotron2 text-center align-item-center d-flex flex-column justify-content-center pt-3">  
                  <div class="texto text-center p-4">
            
            <div></br>
              <h1><b>SOBRE<font color="#A5792E"> A TOLDOS BRASIL</font><br></b></h1> <h2><b>CONHEÇA NOSSA HISTÓRIA</b></h2>
              </div>
                </div>
               
            </div>  
            </br></br></br>
                <?php include "reutilizaveis/rodape.html"?>
</body>
</html>