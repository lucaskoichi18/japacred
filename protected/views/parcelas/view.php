<?php
/* @var $this ParcelasController */
/* @var $model Parcelas */

$this->breadcrumbs=array(
	'Parcelases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Parcelas', 'url'=>array('index')),
	array('label'=>'Create Parcelas', 'url'=>array('create')),
	array('label'=>'Update Parcelas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Parcelas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Parcelas', 'url'=>array('admin')),
);
?>

<h1>View Parcelas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'label'=>'Valor',
			'value'=>ParcelasController::formatPrice($model->valor)
		),
		'vencimento',
		'id_emprestimo',
	),
)); ?>
