<?php
$id = $_GET['CODIGO'];

require_once 'cabecalho.php';
require_once 'classes/Funcionario.php';

$funcionario = new Funcionario();
$linha = $funcionario->listar($id);
?>

<h2>Alterar Funcionário</h2>
<form name = "alterar-funcionario" action = "funcionario-editar-post.php" method = "post">
    <input type = "hidden" name = "id" value = "<?php echo $id;?>">
    Nome:
    <input name = "nome">
    <br>
    E-mail::
    <input name = "email">
    <br>
    Endereço:
    <input name = "endereco">
    <br>
    N°:
    <input name = "numero">
    <br>
    Bairro:
    <input name = "bairro">
    <br>
    Cidade:
    <input name = "cidade">
    <br>
    Estado:
    <input name = "estado">
    <br>
    CPF:
    <input name = "cpf">
    <br>
    RG:
    <input name = "rg">
    <br>
    Celular:
    <input name = "celular">
    <br>
    Telefone:
    <input name = "telefone">
    <br>
    
    <button type = "submit">Salvar</button>
</form>
<?php
require_once 'rodape.php';
?>