
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e3b58b8a21.js" crossorigin="anonymous"></script>
    <!--Css Externo-->
    <link rel="stylesheet" href="css/estilo.css">
    <title>Horizon Medicine</title>
  </head>
  <body>

  <?php require_once "navbarL.php"; ?>

  <section class="container">
  
  <section class="fundoN">

<!-- Slider-->
  <section id="inicio">
    <div class="bd-example ">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/ban1.jpg" class="d-block w-100" alt="...">
            
          </div>
          <div class="carousel-item">
          <img src="img/ban2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
          <img src="img/ban3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
<!--final Slide -->

<!-- equipe-->
<section class="container orgSlide ajusteE textoE" id="equipe">
    <div class="card-group">
      <div class="card arredondarN">
        <img src="imgC/dr.png" class="img-top ajusteA" alt="...">
        <div class="card-body">
          <h5 class="card-title">Dr. Dio Brando</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        
        </div>
      </div>
      <div class="card arredondarN">
        <img src="imgC/diretor.png" class="img-top ajusteA" alt="...">
        <div class="card-body">
          <h5 class="card-title">Charles Xavier</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          
        </div>
      </div>
      <div class="card arredondarN">
        <img src="imgC/recep.png" class="img-top ajusteA" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cláudia Pimentel</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          
        </div>
      </div>
    </div>
  </section>
<!--final do time-->


<!--planos-->
  <div id="planos">
    <section class="orgSlide">
      <div id="carouselExampleInterval" class="carousel slide orgSlideB " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <img src="imgC/planos.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="imgC/planos.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imgC/planos.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
  </div>
  
<!--final Planos-->

<!--Comentários-->
<section class="container orgSlideB ajusteQ " id="comentarios">
    <div class="card-deck">
      <div class="card arredondar">
          <img src="imgC/Pessoas/pessoa3.png" class="img-top ajusteC" alt="...">
        <div class="card-body">
          <h5 class="card-title">Carlos Fernandes</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card arredondar">
          <img src="imgC/Pessoas/pessoa4.png" class="img-top ajusteC" alt="...">
        <div class="card-body">
          <h5 class="card-title">Diego González</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      
      <div class="card arredondar">
          <img src="imgC/Pessoas/pessoa5.png" class="img-top ajusteC" alt="...">
        <div class="card-body">
          <h5 class="card-title">Felipe Diniz</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </section>
<!--Final Comentários-->

<!--Area da localização-->
<section class="container" id="info">
    <div class="card mb-3" style="max-width: 1020px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <iframe class="estiloM" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d918.7701678522036!2d-43.17415157705285!3d-22.910395152684128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5fed1e66fa865506!2sFaculdade%20Senac%20RJ!5e0!3m2!1spt-BR!2sbr!4v1570753487525!5m2!1spt-BR!2sbr" width="330" height="460" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-md-8">
          <div class="card-body">
          <h5 class="card-title"><strong>Horizon Medicine</strong></h5>
            <p class="card-text">A clínica: uma opção diferenciada em clínico geral para a comunidade médica e pacientes, referência em todo o Rio de Janeiro. Priorizamos o atendimento e a tecnologia, que é essencial para os resultados de excêlencia. Nossa especialidade médica trata de pacientes de qualquer idade, atuando com eficiência e responsabilidade.</p>

            <p class="card-text">Ambiente: nosso ambiente é harmônico e sofisticado, decorado com obras do artista plástico Yutaka Toyota, agregam beleza e conforto ao espaço.</p>

            <p class="card-text">Equipe: não existe possibilidade de ter uma clínica ou consultório médico de saúde de sucesso sem uma boa equipe médica e outros colaboradores. Por isso, a Horizon Medicine procurou os melhores profissionais de suas áreas para atender o paciente da melhor maneiro possível.</p>

            <h5 class="card-title"><strong>Contatos</strong></h5>
            <p class="card-text"><i class="fas fa-map-marker-alt"></i>  &nbsp; R. Santa Luzia, 735 - Centro, Rio de Janeiro - RJ, 20030-041</p>
            <p class="card-text"><i class="fab fa-whatsapp"></i>  &nbsp; (21) 97697-7293 &nbsp; | <i class="fas fa-phone"></i>  &nbsp; (21) 97697-7293 &nbsp; </p>
            <p class="card-text"><i class="fas fa-envelope"></i></i>  &nbsp; horizon_medicine@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--Final da area de localização-->

<!-- footer-->
<footer class="rodaP">
    <div class="row">
      <div class="col-xs-12">
        <strong>Copyright © 2019 Horizon Medicine  &nbsp; |  &nbsp; Todos os Direitos Reservados &nbsp;  |  &nbsp; Desenvolvido:</strong><br>
        <p>
          <br><i class=" textoR fas fa-phone-square-alt"></i>&nbsp;&nbsp;&nbsp;(21) 3251-8795 &nbsp;/ &nbsp;(21) 97697-7293 &nbsp;
          <i class="fas fa-envelope"></i></i>&nbsp;&nbsp;&nbsp;horizon_medicine@gmail.com
      </p>
      </div>
    </div>
  </footer>
<!--Final footer-->


</section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>