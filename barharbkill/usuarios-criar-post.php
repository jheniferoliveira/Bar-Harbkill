<?php
require_once 'classes/Usuario.php';

$usuarios = new Usuario();

//$id = $_POST['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$usuarios->inserir($email, $senha);
//$senha->inserir($senha);

$to_email = 'jhenifer_oliveirah@hotmail.com';
$subject = 'Teste';
$message = '$email';
$headers = 'From:jhenifer_oliveirah@hotmail.com';
mail($to_email,$subject,$message,$headers);

header('Location: index.php');

?>