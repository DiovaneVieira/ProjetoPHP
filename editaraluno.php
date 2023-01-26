<?php
session_start();
include_once ("conexaoaluno.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_aluno = "SELECT * FROM avaliacao1 WHERE id = '$id'";
$resultado_aluno = mysqli_query ($conn, $result_aluno);
$row_aluno = mysqli_fetch_assoc ($resultado_aluno);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDITAR ALUNO</title>
</head>
<body>
   <a href="index.php">Cadastrar</a><br>
   <a href="consultaraluno.php">Consultar</a><br>
  <h1>EDITAR ALUNO</h1> 
  <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?> 
  <hr>
    <form action="proc_editaraluno.php" method="post" enctype="multipart/form-data">
    <input type = "hidden"
           name = "id"
           value="<?php echo $row_aluno['id']; ?>"/>

        NOME DO ALUNO: <br/>
    <input  
        type = "text"
        name = "nome"
        placeholder="digite a nome" >
    <br><br/>

        MATÉRIA: <br/>
    <input 
        type = "text"
        name = "materia"
        placeholder="digite o nome do materia" >
    <br><br/>

        NOTA: <br/> 
    <select name="nota" value="<?php echo $row_aluno['nota']; ?>">
        <option value=""></option>                    
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    <br></br>

    <input type="submit" value="Editar Aluno"/>
    <br></br>
        
    </form>
</body>
</html>