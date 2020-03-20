<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
</head>
<body>

		<div class="rounded mb-2 w-50 p-4" style="background-color: #eee;">
			<h1>Admin Login</h1>
			<?= $this->Form->create();?>
			<?= $this->Form->control('username', ['class'=>'form-control','required' => true]) ?>
		    <?= $this->Form->control('password', ['class'=>'form-control','required' => true]) ?>
		    <br>
		    <?= $this->Form->button('Login',['class'=>'btn btn-success']); ?>
		    <?= $this->form->end();?>
		</div>
</body>
</html>