<?php require_once 'cabecalho.php';
require_once 'classes/Produtos.php';
$id = $_GET['CODIGO'];
?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Produto</h2>
    </div>
</div>

<form action="produtos-editar-post.php?CODIGO=<?php echo $id; ?>" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" name = "nome" class="form-control" placeholder="Nome do Produto" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço da Produto</label>
                <input type="number" name = "preco" step="0.01" min="0" class="form-control" placeholder="Preço do Produto" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade do Produto</label>
                <input type="number" name = "quantidade" min="0" class="form-control" placeholder="Quantidade do Produto" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria do Produto</label>
                <select class="form-control"  name = "categoria">
                    <option value="1" selected>Bebidas</option>
                    <option value="1">Entradas</option>
                    <option value="1">Prato Principal</option>
                </select>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
