<h2>Lista de Usuários</h2>
<ul>
<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?= $usuario->getNome() ?></td>
		<td><?= $usuario->getEmail() ?></td>
	</tr>
<?php endforeach; ?>
</ul>

<a href="?r=usuarios/new">Novo</a>
