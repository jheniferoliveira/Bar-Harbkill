<?php

require_once 'classes/Produtos.php';

$id = $_GET['CODIGO'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];

echo $id . " - " . $nome . " - " . $preco . " - " . $quantidade . " - " . $categoria;

$produtos = new Produtos();

$produtos->alterar($id, $nome, $preco, $quantidade, $categoria);



header('Location:produtos.php');

?>