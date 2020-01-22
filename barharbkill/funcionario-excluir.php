<?php

$id_excluir = $_GET['CODIGO'];
require_once 'classes/Funcionario.php';

$funcionario = new Funcionario();
$funcionario->excluir($id_excluir);

header('Location:funcionario.php');
?>