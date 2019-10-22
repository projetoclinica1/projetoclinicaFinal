<?php 

 
//  inserir dados
$conexao = new PDO("mysql:dbname=db_IntegradorCurso;host=localhost","root","");
$stmt = $conexao->prepare("INSERT INTO  tb_Consulta  (  nome, CPF,  RG, Dia, Horario ) VALUES(:NOME, :CPF, :RG, :DIA, :HORARIO )");

//declaraçao das variáveis

$nome = $_POST["nome"];
$CPF = $_POST["cpf"];
$RG = $_POST["rg"];
$dia  = $_POST["dia"];
$horario  = $_POST["horario"];





$stmt->bindParam(":NOME" , $nome);
$stmt->bindParam(":CPF",$CPF );
$stmt->bindParam(":RG" ,$RG   );
$stmt->bindParam(":DIA", $dia );
$stmt->bindParam(":HORARIO", $horario );



$stmt->execute();
header('Location: Visualizar.php');

?>
