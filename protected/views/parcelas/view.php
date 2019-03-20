<?php
/* @var $this ParcelasController */
/* @var $model Parcelas */

$this->breadcrumbs=array(
	'Parcelases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Manage Parcelas', 'url'=>array('admin')),
);
?>

<h1>View Parcelas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'valor',
		'vencimento' => CHtml::textField('Emprestimo_data', Yii::app()->request->getParam('Emprestimo_data')),
		'id_emprestimo',
	),
)); ?>
