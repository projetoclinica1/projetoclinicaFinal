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
<form method='POST' action='Agenda_Cod.php'>
<section class="container fundoW ajusteW">
  <form class="needs-validation" novalidate>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Nome Completo</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Nome Completo" value=""  name="nome">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">CPF</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Cpf" value="" name="cpf" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustomUsername">RG</label>
        <div class="input-group">
         
          <input type="text" class="form-control" id="validationCustomUsername" placeholder="Rg" aria-describedby="inputGroupPrepend" name="rg" >
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="validationCustom03">Dia da Consulta</label>
        
          <input type="date" class="form-control" id="validationCustom03" placeholder="dia de consulta" name="dia" >
      
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom04">Horario</label>
        <input type="time" class="form-control" id="validationCustom04" placeholder="State"  name="horario" >
        <div class="invalid-feedback">
          Please provide a valid state.
        </div>
      </div>
      
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" >
        <label class="form-check-label" for="invalidCheck">
        Confirmo meus dados<p class="card-text aviso"><small class="text-muted">(Depois que preencher os campos para marcar a sua consulta somente a recepcionista pode ALTERAR, você poderá apenas cancelar a mesma.)</small></p>
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <button class="btn btn-secondary" type="submit">Confirmar</button>
  </form>
  
</section>

<!--footer-->
  <footer class="rodaP">
      <div class="row">
        <div class="col-xs-12">
          <strong>Equipe de Criação do Site</strong><br>
          Criação Caseira<br>
          Tel.:(21) 976977293
          
          E-mail:criacaocaseira@gmail.com <i class="fa fa-envelope fa-x1"></i>
        </div>
      </div>
    </footer>
<!--Final footer-->
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<!--final da area de consulta-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>