<?php
 session_start();
 include_once("conexaoaluno.php");
 $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_aluno = "DELETE FROM avaliacao1 WHERE id='$id'";
	$resultado_aluno = mysqli_query($conn, $result_aluno);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>ALUNO APAGADO COM SUCESSO</p>";
		header("Location: consultaraluno.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>ERRO!!! O ALUNO NÃO FOI APAGADO</p>";
		header("Location: consultaraluno.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>NECESSÁRIO SELICIONAR ALUNO</p>";
	header("Location: consultaraluno.php");
 }
