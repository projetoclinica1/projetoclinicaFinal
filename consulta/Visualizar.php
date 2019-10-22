<!doctype html>
<?php require_once "../navbarC.php"; ?>
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


  <br><br><br><br><br>
  
        <div class="container">
        <table class="table">
        <thead class="">
        <tr class="table-secondary">
            <th scope="col">Código</th>
            <th scope="col">Nome do Paciente</th>
            <th scope="col">CPF</th>
            <th scope="col">RG</th>
            <th scope="col">Dia</th>
            <th scope="col">Horário</th>
            </tr>
        </thead>
         
       
  
        <?php           


$conexao = new PDO("mysql:dbname=db_IntegradorCurso;host=localhost","root","");
$stmt = $conexao->prepare("SELECT * FROM tb_Consulta ORDER BY Nome");
$stmt ->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($results as $rows) {
  echo "<tbody>";
  echo "<tr>";
      foreach ($rows as $key => $value) {
      
          echo  "<td>" . $value .  "</td>";
          
      }
  echo "</tr>";
  echo "</tbody>";
  
}




?> 
</tr>
 </thead>
  </tbody>
</table>
</div>
</section>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>