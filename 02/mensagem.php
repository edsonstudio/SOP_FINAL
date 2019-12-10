<?php

$nome=$_POST["nome"];
$email=$_POST["email"];
$mensagem=$_POST["mensagem"];

$conexao=mysqli_connect("localhost", "root", "", "exercicio");

if(!$conexao)
	die("Ocorreu o seguinte erro -> ".mysqli_error());


$query="INSERT INTO `exercicio`.`mensagem`(`nome`,`email`,`mensagem`, `id`) VALUES('".$nome."', '".$email."', '".$mensagem."', default)";

mysqli_query($conexao,$query);

header('Location: index.html');
?>