<?php if ($this->request->data): ?>
	<!-- formulário -->
	<?= $this->Form->create('Post') ?>
	<?= $this->Form->input('id', [
		'type' => 'hidden'
	] ) ?>
	<?= $this->Form->input('title') ?>
	<?= $this->Form->input('body')  ?>
	<?= $this->Form->end('Editar')  ?>
	<!-- fim formulário -->
<?php else:  ?>
	<h2>Nenhum registro com este id encontrado.</h2>
<?php endif ?>