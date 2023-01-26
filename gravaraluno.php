<?php
 session_start();
 include_once("conexaoaluno.php");

 $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
 $materia = filter_input(INPUT_POST, 'materia', FILTER_SANITIZE_EMAIL);
 $nota = filter_input(INPUT_POST, 'nota', FILTER_SANITIZE_NUMBER_INT);

//echo "Nome: $nome <br>";
//echo "Materia: $materia <br>";
//echo "Nota: $nota <br>";

 $result_avaliacao1 = "INSERT INTO avaliacao1 (nome, materia, nota) VALUES ('$nome', '$materia', '$nota')";
 $resultado_avaliacao1 = mysqli_query($conn, $result_avaliacao1);

 if(mysqli_insert_id($conn)){
							 $_SESSION['msg'] = "<p style='color:green;'><b>NOTA GRAVADA COM SUCESSO !!!<b></p>";
							 header("Location: index.php");
                             }else{
								   $_SESSION['msg'] = "<p style='color:red;'><b>NOTA NÃO FOI CADASTRADA <b></p>";
								   header("Location: index.php");
      							   }
?>