<?php
$id = $_GET['CODIGO'];

require_once 'cabecalho.php';
require_once 'classes/Categoria.php';

$categoria = new Categoria();
$linha = $categoria->listar1Categoria($id);
?>

<h2>Alterar Categoria</h2>

<form name="alterar-categoria"action="categorias-editar-post.php" method="post">

 
    <input name="id" type ="hidden" name = "id" value = "<?php echo $id;?>">
    Descrição:
    <input name="nome_categoria" value = "<?php echo $linha['descricao'];?>">
    
    <button type="submit">Salvar</button>
</form>
<?php
require_once 'rodape.php';

?>