<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);
?>
<?php $this->menu=array(
	array('label'=>'List User', 'url'=>array('index'), 'class'=>"list-group-item"),
	array('label'=>'Create User', 'url'=>array('create'), 'class'=>"list-group-item"),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id), 'class'=>"list-group-item"),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'class'=>"list-group-item"),
	array('label'=>'Manage User', 'url'=>array('admin'), 'class'=>"list-group-item"),
);
?>
</div>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-hover'),
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>

