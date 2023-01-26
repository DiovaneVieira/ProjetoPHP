<?php
 session_start();
 include_once("conexaoaluno.php");

 $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
 $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
 $materia = filter_input(INPUT_POST, 'materia', FILTER_SANITIZE_STRING);
 $nota = filter_input(INPUT_POST, 'nota', FILTER_SANITIZE_NUMBER_INT);

//echo "Nome: $nome <br>";
//echo "Materia: $materia <br>";
//echo "Nota: $nota <br>";

 $result_avaliacao1 = "UPDATE avaliacao1 SET nome='$nome', materia='$materia', nota='$nota' WHERE id='$id'";
 $resultado_avaliacao1 = mysqli_query($conn, $result_avaliacao1);

 if(mysqli_affected_rows($conn)){
							 $_SESSION['msg'] = "<p style='color:green;'><b>ALUNO EDITADO COM SUCESSO !!!<b></p>";
							 header("Location: editaraluno.php");
                             }else{
								   $_SESSION['msg'] = "<p style='color:red;'><b>O ALUNO NÕA FOI EDITADO <b></p>";
								   header("Location: editaraluno.php?id=$id");
      							   }
?>