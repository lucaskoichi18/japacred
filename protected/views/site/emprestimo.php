<?php
/* @var $this EmprestimoController */
/* @var $model Emprestimo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'emprestimo-emprestimo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parcelas'); ?>
		<?php echo $form->textField($model,'parcelas'); ?>
		<?php echo $form->error($model,'parcelas'); ?>
	</div>

	<div class="row">
		<?php $form->labelEx($model,'valorcet'); ?>
		<?php $form->textField($model,'valorcet'); ?>
		<?php $form->error($model,'valorcet'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->