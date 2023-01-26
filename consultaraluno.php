<?php
session_start();
include_once("conexaoaluno.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<title>Consultar Aluno</title>		
	</head>
	<body>
	 <div class="container">
		<a href="index.php">Cadastrar</a><br>		
		<h1>Consultar Aluno</h1>
		<?php				
		 $result_aluno = "SELECT * FROM avaliacao1";
		 $resultado_alunos = mysqli_query($conn, $result_aluno);
		 while($row_aluno = mysqli_fetch_assoc($resultado_alunos)){
		 echo "ID: " . $row_aluno['id'] . "<br>";
		 echo "Nome: " . $row_aluno['nome'] . "<br>";
		 echo "Matéria: " . $row_aluno['materia'] . "<br>";
         echo "Nota: " . $row_aluno['nota'] . "<br>";
		 echo "<a href='editaraluno.php?id=" . $row_aluno['id'] . "'>Editar</a> <br>";
		 echo "<a href='proc_excluiraluno.php?id=" . $row_aluno['id'] . "'>Excluir</a><br><hr>";
		 }		
		?>	
	 </div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="js/personalizado.js"></script>	
	</body>
</html>