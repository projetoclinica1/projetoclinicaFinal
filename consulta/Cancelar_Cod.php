<?php     

//Excluir dados do BD

$conexao = new PDO("mysql:dbname=db_IntegradorCurso;host=localhost","root","");
$stmt = $conexao->prepare("DELETE FROM tb_Consulta WHERE id_Consulta = :ID");


$identificacao = $_POST["idConsulta"];


$stmt->bindParam(":ID", $identificacao);

$stmt->execute();


header('Location: ../index3.php');

?>