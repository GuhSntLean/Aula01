<h2>Novo Usuário</h2>
<form action="?r=usuarios/create" method="POST">
	<p>Usuário:</p>
	<input type="text" name="nome" required>
	<p>Email:</p>
	<input type="text" name="email" required>
	<p>Senha:</p>
	<input type="password" name="senha">
	<p><input type="submit" value="Salvar"></p>
</form>
<a href="?r=usuarios">Voltar</a>