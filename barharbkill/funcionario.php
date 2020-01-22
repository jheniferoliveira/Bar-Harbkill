<?php
require_once 'classes/Funcionario.php';
$funcionario = new Funcionario();

$lista = $funcionario->listar();

require_once 'cabecalho.php';
?>
<h2>Funcionários</h2>

<a href="funcionario-criar.php"class="btn btn-success">Adicionar funcionario</a>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>RG</th>
        <th>CPF</th>
        <th>Celular</th>
        <th>E-mail</th>
        <th>Açoes</th>
        
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['rg'];?></td>
            <td><?php echo $linha['cpf'];?></td>
            <td><?php echo $linha['celular'];?></td>
            <td><?php echo $linha['email'];?></td>

            <td>
                <a href="funcionario-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a>
                <a href="funcionario-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php
require_once 'rodape.php';
?>