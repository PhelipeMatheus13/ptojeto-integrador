<?php
  $curso = htmlspecialchars($_GET['curso']);

  $professor =  htmlspecialchars($_GET['Professor']);

	$IdCurso = htmlspecialchars($_GET['IdCurso']);

  $Conteudo = htmlspecialchars($_GET['Conteudo']);

	$Telefone = htmlspecialchars($_GET['Telefone']);

	$eMail = htmlspecialchars($_GET['eMail']);

  $senha = htmlspecialchars($_GET['senha']);



$host = "localhost"; 

$user = "id18630512_pi_ii	"; 

$pass = "#2d5G1-D?OWZ=sSq"; 

$dbname = "id18630512_bd_projeto_integrador_ii";

$connection = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_errno().": ".mysql_error()."<BR>"); 

mysqli_select_db($connection,$dbname);



$query = "INSERT INTO `produto`(`Curso`, `IdCurso`, `Telefone`, `eMail`)  VALUES ('".$Curso."', '".$professor.'",
,'".$IdCurso."','".$Conteudo."','".$Telefone."', '".$eMail."', '".$senha."')";



mysqli_query ($connection,$query) or die ('Erro ao salvar');



    while($tarefa = mysqli_fetch_assoc($query)){

        echo $tarefas["nome"];


echo " Salvo ".$nome." " .$cpf ;
?>