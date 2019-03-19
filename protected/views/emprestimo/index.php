<?php
/* @var $this EmprestimoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emprestimos',
);

$this->menu=array(
	array('label'=>'Create Emprestimo', 'url'=>array('create')),
	array('label'=>'Manage Emprestimo', 'url'=>array('admin')),
);
?>

<h1>Emprestimos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
