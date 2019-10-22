<?php
session_start();

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM" crossorigin="anonymous">
    <!--Css Externo-->
    <link rel="stylesheet" href="css/estilo.css">


    <title>Clinica</title>
  </head> 
  <body>
    <form method="POST" action="cadastrar.php">

   
<div class="container-fluid d-flex justify-content-center fundoC">
    <div class="row">
        <div class="jumbotron">
            <?php
                if (isset($_SESSION['status_cadastro'])):
            ?>
                    <div class="alert alert-success" role="alert">
                        Cadastro efetuado com sucesso!!
                    </div>
            <?php
                endif;
                unset($_SESSION['status_cadastro']);
            ?>
   
        <?php

            if (isset($_SESSION['usuario_existe'])):
            ?>
                <div class="alert alert-danger" role="alert">
                    Usuario já existente!!
                </div>
            <?php
                endif;
                unset($_SESSION['usuario_existe']);
            ?>
            <form class="">
            <div class="form">
                <div class="col-md-13 mb-0">
                <label for="validationServer01">Nome Completo</label>
                <input type="text" name="nome" class="form-control" placeholder="Digite o nome completo"><br><br>
            
                </div>
                <div class="col-md-13 mb-0">
                <label for="validationServer02">Usuario</label>
                <input type="text" name="usuario" Class="form-control" placeholder="Digite seu nome de Usuario"><br><br>
            
                </div>
                <div class="col-md-13 mb-0">
                <label for="validationServerUsername">Senha</label>
                <div class="input-group">
                    
                <input type="password" name="senha" Class="form-control" placeholder="Digite sua senha"><br><br>
                
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                <label class="form-check-label" for="invalidCheck3">
                    Aceito termos e condições
                </label>
                <div class="invalid-feedback">
                    Você deve concordar antes de enviar.
                </div>
                </div>
            </div>
            <button class="btn btn-secondary separar" type="submit">cadastrar</button>
           <a href="index2.php"> <small class="">Login</small></p></a>
            </form>
        </div>
    </div>
</div>

<!--final bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        </body>
</html>