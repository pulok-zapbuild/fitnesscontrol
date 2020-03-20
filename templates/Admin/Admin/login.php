
	<h1>Admin Login</h1>
	<div class="flash">
		<?= $this->Flash->render() ?>
	</div>
	<?= $this->Form->create();?>
	<?= $this->Form->control('username', ['class'=>'form-control','required' => false]) ?>
    <?= $this->Form->control('password', ['class'=>'form-control','required' => false]) ?>
    <br>
    <?= $this->Form->button('Login',['class'=>'btn btn-success']); ?>
    <?= $this->form->end();?>
