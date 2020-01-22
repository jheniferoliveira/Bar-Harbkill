<?php require_once 'cabecalho.php'; ?>

<h2>Cadastrar novo funcionário</h2>

<form name ="novo-funcionario" method="post" action="funcionario-criar-post.php">
Nome:
<input name="nome" maxlength="30" required>
<br>
E-mail:
<input name="email" maxlength="40" required>
<br>
Endereço:
<input name="endereco" maxlength="50" required>
<br>
N°:
<input name="numero" maxlength="3" required>
<br>
Bairro:
<input name="bairro" maxlength="20" required>
<br>
Cidade:
<input name="cidade" maxlength="20" required>
<br>
Estado:
<input name="estado" maxlength="3" required>
<br>
CPF:
<input name="cpf" maxlength="13" required>
<br>
RG:
<input name = "rg" maxlength = "12" required>
<br>
Celular:
<input name="celular" maxlength="15" required>
<br>
Telefone:
<input name="telefone" maxlength="15" required>
<br>
<button type="submit">Salvar</button>
</form>
<?php require_once 'rodape.php'; ?>