<?php
/* @var $this EmprestimoController */
/* @var $model Emprestimo */

$this->breadcrumbs=array(
	'Emprestimos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$url = $this->createUrl('emprestimo/view', array('id'=>$model->id));
?>

<h1>Alterar Empréstimo <?php echo $model->id; ?></h1>

<div class="row">
	<div class="col-md-8">
		<?php $this->renderPartial('_form', array('model'=>$model, 'users'=>$users)); ?>
	</div>	
	<div class="col-md-4">
		<div class="list-group" >
			<a href="/japacred/index.php?r=emprestimo/index" class="list-group-item ">Lista</a>
			<a href="/japacred/index.php?r=emprestimo/create" class="list-group-item">Criar</a>
			<a href="<?=$url?>" class="list-group-item">Detalhes</a>
			<a href="/japacred/index.php?r=emprestimo/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>
</div>