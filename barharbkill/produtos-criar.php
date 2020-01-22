<?php require_once 'cabecalho.php' ?>
<h2>Criar Novo Produto</h2>
<form action="produtos-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" class="form-control" placeholder="Nome do Produto" required name="nome">
            </div>
            <div class="form-group">
                <label for="preco">Preço da Produto</label>
                <input type="number" step="0.01" min="0" class="form-control" placeholder="Preço do Produto" required name="preco">
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade do Produto</label>
                <input type="number"  min="0" class="form-control" placeholder="Quantidade do Produto" required name="quantidade">
            </div>
            <div class="form-group">
                <label for="categoria">Categoria do Produto</label>
                <select class="form-control" name="categoria">
                    <option value="1">Bebidas</option>
                    <option value="2">Entradas</option>
                    <option value="3">Prato Principal</option>
                </select>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
