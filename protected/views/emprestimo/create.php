<?php
/* @var $this EmprestimoController */
/* @var $model Emprestimo */

$this->breadcrumbs=array(
	'Emprestimos'=>array('index'),
	'Create',
);

?>

<h1>Create Emprestimo</h1>

<div class="row">
	<div class="col-md-8">
		<?php $this->renderPartial('_form', array('model'=>$model, 'users'=>$users)); ?>
	</div>
	<div class="col-md-4">
	<?php
		$url = $this->createUrl('/emprestimo/view', array('id'=>$model->id));
	?>

	<div class="list-group" >
		<a href="/japacred/index.php?r=emprestimo/index" class="list-group-item ">Lista</a>
		<a href="/japacred/index.php?r=emprestimo/admin" class="list-group-item">Gerenciamento</a>
	</div>
</div>	

