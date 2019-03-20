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
	array('label'=>'Update Emprestimo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Emprestimo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Emprestimo', 'url'=>array('admin')),
	array('label'=>'Parcelas', 'url'=>array('parcelas/admin')),
);
?>

<h1>View Emprestimo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'valor',
		'parcelas',
		'id_user',
		'valorcet',
		'data',
	),
));

?>
