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
    <link rel="stylesheet" href="../css/estilo.css">


    <title>Clinica</title>
  </head>
  <body>
  <?php require_once "../navbarC.php"; ?> 
<!--area de Consulta -->

<form method='POST' action='Cancelar_Cod.php'>
<div class="container-fluid d-flex justify-content-center fundoC  ajusteX">
    <div class="row">
        <div class="jumbotron">
  <form class="needs-validation" novalidate>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Registro da Consulta</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Digite o número da Consulta" value="" required id="id_Consulta" name="idConsulta">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      
      </div>
    
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
        Confirmo meus dados<p class="card-text aviso"><small class="text-muted">(Caso tenha cancelado sua consulta por algum erro precisará ver se tem possibilidade de marcar nos mesmos dias e horarios.)</small></p>
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <button class="btn btn-secondary" type="submit">Confirmar</button>
  </form>
  

    </div>
  </div>
</div>
<!--final da area de consulta-->
<footer class="rodaZ">
        <div class="row">
        <div class="col-xs-12">
            <strong>Equipe de Criação do Site</strong><br>
            Criação Caseira<br>
            Tel.:(21) 976977293 <i class="fa fa-phone fa-x1"></i> <br>
            
            E-mail:criacaocaseira@gmail.com <i class="fa fa-envelope fa-x1"></i>
        </div>
        </div>
    </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>