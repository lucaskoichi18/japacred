<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);
?>

<h1>Cadastrar Usuário</h1>

<div class="row">
	<div class="col-md-8">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
	<div class="col-md-4">
	<?php
		$url = $this->createUrl('/user/view', array('id'=>$model->id));
	?>

	<div class="list-group" >
		<a href="/japacred/index.php?r=user/index" class="list-group-item ">Lista</a>
		<a href="/japacred/index.php?r=user/admin" class="list-group-item">Gerenciamento</a>
	</div>
</div>	