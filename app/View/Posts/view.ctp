<table>
	
	<tbody>
		<?php foreach($post as $register): ?>
			<tr>
				<td><?= $register["id"] ?></td>
				<td><?= $register["title"] ?></td>
				<td><?= $register["body"] ?></td>
				<td><?= $register["created"] ?></td>
				<td><?= $register["modified"] ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
	<tfoot>
		<tr>
			<td>
				<?=  $this->Html->link(
						'Editar', ['controller' => 'Posts', 'action' => 'edit/'.$post["Post"]["id"]]
					);
				?>
			</td>
			<td>
				<?= /*link atrelado ao controller*/ 
					$this->Form->postLink(
						'Deletar', 
						['action' => 'delete', $post["Post"]["id"] ], 
						['confirm' => 'Deseja mesmo deletar ?']
					); /*passando id como parametro do action */
					
				?>
			</td>
		</tr>
	</tfoot>
</table>