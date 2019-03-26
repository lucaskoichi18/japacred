<?php
/* @var $this ParcelasController */
/* @var $data Parcelas */
?>

<div class="view">
	<div class="row">
		<div class="col-sm-10">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
					<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
					<br />
				</div>	
				<div class="panel-body">
					<b><?php echo CHtml::encode($data->getAttributeLabel('valor da parcela')); ?>:</b>
					<?php echo CHtml::encode(ParcelasController::formatPrice($data->valor)); ?>
					<br />
					<b><?php echo CHtml::encode($data->getAttributeLabel('vencimento')); ?>:</b>
					<?php echo CHtml::encode($data->vencimento); ?>
					<br />
					<b><?php echo CHtml::encode($data->getAttributeLabel('id_emprestimo')); ?>:</b>
					<?php echo CHtml::encode($data->id_emprestimo); ?>
					<br />
				</div>	
			</div>
		</div>
	</div>	
</div>