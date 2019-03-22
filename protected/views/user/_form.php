<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous">
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<br>
		<?php echo $form->labelEx($model,'email', array(
			'class'=>'col-sm-2 control-label'
		)); ?>
		<div class="col-sm-8">
		<?php echo $form->textField($model, 'email', array(
			'class'=>'form-control', 'placeholder'=>'Email'
		)); ?>
	</div>
		<?php echo $form->error($model,'email'); ?>
	</div>	

	<br>

	<div class="row buttons">
		<div class="col-sm-offset-2 col-sm-10">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
			'class'=>"btn btn-default"
		)); ?>
		</div>
	</div>

	</br>

<?php $this->endWidget(); ?>

</div><!-- form -->