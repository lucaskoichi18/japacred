<?php
/* @var $this EmprestimoController */
/* @var $model Emprestimo */
/* @var $form CActiveForm */
?>

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function() {
	$("#Emprestimo_valorcet, #Emprestimo_parcelas, #Emprestimo_valor").on("change", function() {
		var valor = $('#Emprestimo_valor').val();
		var parcelas = $('#Emprestimo_parcelas').val();
		var valParcela = valor * Math.pow((1.065), parcelas);
		var valParcela = valParcela / parcelas;
		var valorcet = valParcela * parcelas;
		console.log(valorcet);
		$('#Emprestimo_valorcet').val(valorcet);
	});
})
</script>

<script type="text/javascript">
$(document).ready(function() {
	$("#Emprestimo_data").on("change", function() {
		var today = new Date();
		var dia = today.getDate();
		var mes = today.getMonth();
		var ano = today.getFullYear();
		var data = ano + "-" + mes + "-" + dia;
		var dataFormat = dia + "/" + mes + "/" + ano;
		$('#Emprestimo_data').val(data);  
	});
})
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'emprestimo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	<select name="Emprestimo[id_user]">
		<?php for ($i=0; $i < count($users); $i++): ?>
			<option value="<?php echo $users[$i]['id']; ?>"><?php echo $users[$i]['username']; ?></option>
		<?php endfor; ?>
	</select>
	</div>

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
		<?php echo $form->labelEx($model,'valorcet'); ?>
		<?php echo $form->textField($model,'valorcet'); ?>
		<?php echo $form->error($model,'valorcet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row buttons">	
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->