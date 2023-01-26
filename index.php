<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <title>AVALIAÇÃO</title>
</head>
<body>
  <div class="container">
   
   <h1>CADASTRO DE ALUNO</h1> 
    <?php
		 if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		 }
		?> 
    <hr>
    <form action="gravaraluno.php" method="post" enctype="multipart/form-data">        
        NOME DO ALUNO: <br/>
        <input type = "text"
        name = "nome"
        placeholder="digite a nome"/>
        <br><br/>

        MATÉRIA: <br/>
        <input type = "text"
        name = "materia"
        placeholder="digite o nome do materia"/>
        <br><br/>

        NOTA: <br/> 
      <select name="nota">
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

     <input type="submit" value="Cadastrar Aluno"/>
     <br></br>
     <p>
     <a href="consultaraluno.php">Consultar</a><br></br>
    </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="js/personalizado.js"></script>
  </div>
</body>
</html>