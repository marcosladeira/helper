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
<title>Sobre</title>
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
      <div class="jumbotron3 text-center align-item-center d-flex flex-column justify-content-center pt-3">  
                  <div class="texto text-center p-4">
            <div></br>
             <h2><b>COBERTURA DE POLICARBONATO ALVEOLAR</b></h2>
              </div>
                </div>        
            </div> 
            <br>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">   
                <font color="#2C2C2C"> <h3>Somos parte da revolução na locação de<br> imóveis por temporada</h3></font></br>
                  <font color="#2C2C2C"><h6>As Plataformas de locação por temporada surgiram para revolucionar o modo de<br> locação de imóveis. Elas se tornaram a opção mais acessível do que as redes de<br> hotelaria, atraindo cada vez mais turistas e profissionais que precisam de uma<br> estadia econômica, curta e segura. Oferecendo alternativas como a locação de um<br> quarto ou o imóvel completo.<br><br>
Essa revolução está trazendo cada dia mais praticidade aos viajantes pelo mundo a<br> fora, pois ao adentrar nas plataformas eles poderão ver de forma pratica as<br> imagens e descrições do ambiente, a localização e a disponibilidade do imóvel.<br><br>
Devido a alta procura dessa nova modalidade de locação, os lucros se tornaram<br> altamente rentáveis para os anfitriões, porém o trabalho e os cuidados com os<br> imóveis aumentaram proporcionalmente, principalmente para quem possui mais de<br> um imóvel, demandando cada dia mais tempo dos anfitriões.<br><br>
E foi pensando em aumentar os benefícios e trazer o conforto para os anfitriões que<br> a Helper surgiu, oferecendo vários planos de gerenciamento de acordo com a sua<br> necessidade.</h6></font>
                  </br>
                </div>
                <div class="col-lg-4 mx-auto">
                </br></br>
                <div class="jumbotron7 text-center align-item-center d-flex flex-column justify-content-center pt-3">  
                 <img src="img/logo_white.png" />
            </div> 
                  </div>
              
              </div>
            </div> 
  </div><br><br>
  <div class="jumbotron4 text-center align-item-center d-flex flex-column justify-content-center pt-3"> 
  <div class="container">
  <div class="row text-justify">
  <div class="col">
<h2>A solução que você<br> buscava</h2>
  </div>   
  <div class="col">
  <h5>

A Helper oferece ajuda na função de alugar seu imóvel por diária com segurança, tranquilidade e rendimentos significativos nas plataformas de locação online (Airbnb, Booking.com, expedia entre outros).<br>
Com ética e profissionalismo realizamos analise de hóspedes, vistorias e manutenções de locação com apoio aos hóspedes em toda a sua estadia.<br>
Agilidade na recepção dos clientes com excelência na comunicação, fornecendo a confiança na hora de reservar o seu imóvel.<br>
Proporcionamos momentos marcantes e gratificantes com conforto aos hóspedes em ambientes limpos, funcionais e agradáveis.<br>
Objetivando superar as expectativas de clientes, oferecendo através de nossa equipe de profissionais um excelente relacionamento, tendo por missão a credibilidade, experiência e transparência.
</h5>
  </div> 
  </div>
  </div>
  </div>   
  </br></br></br>
                <?php include "reutilizaveis/rodape.html"?>
</body>
</html>