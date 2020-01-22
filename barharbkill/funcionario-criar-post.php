<?php
require_once 'classes/Funcionario.php';

$funcionario = new Funcionario();

$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$celular = $_POST['celular'];
$telefone = $_POST['telefone'];

$funcionario->inserir($nome,$email, $endereco, $numero, $bairro, $cidade, $estado, $cpf, $rg, $celular, $telefone);
header('Location:funcionario.php');
?>