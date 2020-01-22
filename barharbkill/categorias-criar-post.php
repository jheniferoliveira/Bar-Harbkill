<?php
require_once 'classes/Categoria.php';

$categoria = new Categoria();

$nome_categoria = $_POST['descricao'];
$categoria->inserir($nome_categoria);
header('Location:categorias.php');

?>