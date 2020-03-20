<div class="rounded mb-2 p-4" style="background-color: #eee;">
	<h1>Add New Member</h1>
	<?= $this->Form->create($user);?>
	<?= $this->Form->control('username', ['class'=>'form-control','label'=>'username*','required' => false]) ?>
    <?= $this->Form->control('password', ['class'=>'form-control','label'=>'password*','required' => false]) ?>
    <?= $this->Form->control('image', ['class'=>'form-control','required' => false]) ?>
    <?= $this->Form->control('firstname', ['class'=>'form-control','label'=>'firstname*','required' => false]) ?>
    <?= $this->Form->control('lastname', ['class'=>'form-control','required' => false]) ?>

    <?= $this->Form->control('gender', ['class'=>'form-radio','type'=>'radio','required' => false,
    	'options' => [
    					['value'=>'0','text'=>'male'],['value'=>'1','text'=>'female'],['value'=>'2','text'=>'others']
    				],'label'=>'gender*']) ?>

    <?= $this->Form->control('email', ['class'=>'form-control','label'=>'email*','required' => false]) ?>
    <?= $this->Form->control('mobile', ['class'=>'form-control','required' => false]) ?>
    <?= $this->Form->control('addressline1', ['class'=>'form-control','required' => false]) ?>
    <?= $this->Form->control('addressline2', ['class'=>'form-control','required' => false]) ?>
    <?= $this->Form->control('city', ['class'=>'form-control','required' => false]) ?>
    <?= $this->Form->control('state', ['class'=>'form-control','required' => false]) ?>
    <?= $this->Form->control('pincode', ['class'=>'form-control','required' => false]) ?>
    <?= $this->Form->control('country', ['class'=>'form-control','required' => false]) ?>
    <br>
    <?= $this->Form->button('Login',['class'=>'btn btn-success','required' => false]); ?>
    <?= $this->form->end();?>
</div>