<?php
require_once 'classes/Produtos.php';

$produtos = new Produtos();

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];

$produtos->inserir($nome, $preco, $quantidade, $categoria);
header('Location:produtos.php');
?>