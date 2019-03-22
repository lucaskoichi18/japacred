<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">
	<div class="row">
		<div class="col-sm-10">	
			<div class="panel panel-default">
				<div class="panel-heading">
					<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
					<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
				</div>	
				<div class="panel-body">
					<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
					<?php echo CHtml::encode($data->username); ?>
					<br />
					<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
					<?php echo CHtml::encode($data->password); ?>
					<br />
					<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
					<?php echo CHtml::encode($data->email); ?>
					<br />
				</div>
			</div>
		</div>
	</div>			
</div>