<?php

include_once("conexao.php");

$nome= filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$cpf= filter_input(INPUT_POST, 'cpf',FILTER_SANITIZE_NUMBER_FLOAT);
$data= filter_input(INPUT_POST, 'data',FILTER_SANITIZE_NUMBER_FLOAT);
$email= filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
$tel= filter_input(INPUT_POST, 'tel',FILTER_SANITIZE_NUMBER_INT);
$sexo= filter_input(INPUT_POST, 'sexo',FILTER_SANITIZE_STRING);
$city= filter_input(INPUT_POST, 'city',FILTER_SANITIZE_STRING);
$bibliografia= filter_input(INPUT_POST, 'acrescimo',FILTER_SANITIZE_STRING);
$senha= filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING);



$table="INSERT INTO cadastro ( nome,cpf,nascimento,email,telefone,sexo,cidade,descrição,senha )
 VALUES ('$nome','$cpf','$data','$email','$tel','$sexo','$city','$bibliografia','$senha')";

$resultado=mysqli_query($conn, $table);

