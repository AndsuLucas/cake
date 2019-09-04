<?= $this->Html->link( 'Escrever um post', ['controller' => 'Posts', 'action' => 'create'] ); ?>
<hr>
<hr>
<table align="center">
	<tr>
		<th>Id</th>
		<th>Titulo</th>
		<th>Conteúdo</th>
		<th>Data de criação</th>
	</tr>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?=$post["Post"]["id"]?></td>
		<!-- helper que ajuda a gente a criar alguns elementos html -->
		<td>
			<?= $this->Html->link(
					$post["Post"]["title"], 
					['controller' => 'posts', 'action' => 'view', $post['Post']['id']]
				)
			?>
		</td>
		<td>
			<?= $post["Post"]["body"]?>
		</td>
		<td><?= $post['Post']['created'] ?></td>
	</tr>
	<?php endforeach ?>

</table>
