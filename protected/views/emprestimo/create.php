<?php
/* @var $this EmprestimoController */
/* @var $model Emprestimo */

$this->breadcrumbs=array(
	'Emprestimos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Emprestimo', 'url'=>array('index')),
	array('label'=>'Manage Emprestimo', 'url'=>array('admin')),
);
?>

<h1>Create Emprestimo</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'users'=>$users)); ?>