<?php

require_once 'classes/Funcionario.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$numero = $_POST ['numero'];
$bairro = $_POST ['bairro'];
$cidade = $_POST ['cidade'];
$estado = $_POST ['estado'];
$cpf = $_POST ['cpf'];
$rg = $_POST['rg'];
$celular = $_POST ['celular'];
$telefone = $_POST ['telefone'];

$funcionario = new Funcionario();
$funcionario->alterar($id, $nome,$email, $endereco, $numero, $bairro, $cidade, $estado, $cpf, $rg, $celular, $telefone);

//echo $id . " - " . $email;

header('Location:funcionario.php');

?>