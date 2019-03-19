<?php
/* @var $this EmprestimoController */
/* @var $model Emprestimo */

$this->breadcrumbs=array(
	'Emprestimos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Emprestimo', 'url'=>array('index')),
	array('label'=>'Create Emprestimo', 'url'=>array('create')),
	array('label'=>'View Emprestimo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Emprestimo', 'url'=>array('admin')),
);
?>

<h1>Update Emprestimo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>