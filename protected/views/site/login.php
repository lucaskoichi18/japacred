<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<br>
		<?php echo $form->labelEx($model,'username', array(
			'class'=>'col-sm-2 control-label'
		)); ?>
		<div class="col-sm-8">
		<?php echo $form->textField($model, 'username', array(
			'class'=>'form-control', 'placeholder'=>'Nome'
		)); ?>
	</div>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<br>
		<?php echo $form->labelEx($model,'password', array(
			'class'=>'col-sm-2 control-label'
		)); ?>
		<div class="col-sm-8">
		<?php echo $form->textField($model, 'password', array(
			'class'=>'form-control', 'placeholder'=>'Senha'
		)); ?>
	</div>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<div class="col-sm-offset-2 col-sm-10">
		<?php echo CHtml::submitButton('Login', array(
			'class'=>"btn btn-default"
		)); ?>
		</div>
	</div>

	<br>

<?php $this->endWidget(); ?>
</div><!-- form -->