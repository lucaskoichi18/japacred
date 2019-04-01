<?php
/* @var $this EmprestimoController */
/* @var $model Emprestimo */

$this->breadcrumbs=array(
	'Emprestimos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Emprestimo', 'url'=>array('index')),
	array('label'=>'Create Emprestimo', 'url'=>array('create')),
	array('label'=>'Update Emprestimo', 'url'=>array('update', 'id'=>$model->id), 'class'=>"list-group-item"),
	array('label'=>'Delete Emprestimo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Emprestimo', 'url'=>array('admin')),
	array('label'=>'Parcelas', 'url'=>array('parcelas/index', 'id_emprestimo'=>$model->id)),
);
?>

<h1>View Empréstimo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-hover'),
	'attributes'=>array(
		'id',
		array(
			'label'=>'Valor',
			'value'=>EmprestimoController::formatPrice($model->valor)
		),
		'parcelas',
		'fk_user.username',
		array(
			'label'=>'Valor CET',
			'value'=>EmprestimoController::formatPrice($model->valorcet)
		),
		'data',
		array(
			'label'=>'Valor Parcela',
			'value'=>EmprestimoController::formatPrice($model->valParcela)
		),
	),
));

?>
