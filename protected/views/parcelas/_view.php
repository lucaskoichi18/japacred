<?php
/* @var $this ParcelasController */
/* @var $data Parcelas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vencimento')); ?>:</b>
	<?php echo CHtml::encode($data->vencimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_emprestimo')); ?>:</b>
	<?php echo CHtml::encode($data->id_emprestimo); ?>
	<br />


</div>