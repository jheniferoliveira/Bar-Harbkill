<?php
require_once 'classes/Categoria.php';

$categoria = new Categoria();

$lista = $categoria->listar();
require_once 'cabecalho.php';
?>

<h2>Categoria</h2>
<a href="categorias-criar.php" class="btn btn-success">Adicionar categoria</a>

<br>
<select>
    <?php foreach($lista as $linha){ ?>
        <option value="<?php  echo $linha['id'];?>">
        <?php echo $linha['descricao'];?>
        </option>
    <?php } ?>
</select>

    


<table class="table">
    <thead>
        <th>Id</th>
        <th>Descrição</th>
        <th></th>
        <th class= "acao" >Editar</th> 
        <th class= "acao"> Excluir</th>
        
    </thead>
    <tbody>
        <?php foreach($lista as $linha){?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['descricao'];?></td>
            <td></td>
            <td><a href="categorias-editar.php?CODIGO=<?php echo $linha ['id'];?>" class="btn btn-info">Alterar</a></td>
            <td><a href="categorias-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php
require_once 'rodape.php';
?>