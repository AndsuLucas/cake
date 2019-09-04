<?= $this->Form->create('Post') ?>
<?= $this->Form->input('title') ?>
<?= $this->Form->input('body', ['rows' => '3'] ) ?>
<?= $this->Form->end('Save') ?>
