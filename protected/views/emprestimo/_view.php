<?php
/* @var $this EmprestimoController */
/* @var $data Emprestimo */
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
					<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
					<?php echo CHtml::encode(EmprestimoController::formatPrice($data->valor)); ?>
					<br />
					<b><?php echo CHtml::encode($data->getAttributeLabel('parcelas')); ?>:</b>
					<?php echo CHtml::encode($data->parcelas); ?>
					<br />
					<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
					<?php echo CHtml::encode($data->id_user); ?>
					<br />
					<b><?php echo CHtml::encode($data->getAttributeLabel('valorcet')); ?>:</b>
					<?php echo CHtml::encode(EmprestimoController::formatPrice($data->valorcet)); ?>
					<br />
					<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
					<?php echo CHtml::encode($data->data); ?>
					<br />
				</div>	
			</div>
		</div>
	</div>			
</div>