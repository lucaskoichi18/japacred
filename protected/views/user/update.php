<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$url = $this->createUrl('/user/view', array('id'=>$model->id));
?>

<h1>Alterar Usuário <?php echo $model->id; ?></h1>
<div class="row">
	<div class="col-md-8">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>	
	<div class="col-md-4">
		<div class="list-group" >
			<a href="/japacred/index.php?r=user/index" class="list-group-item ">Lista</a>
			<a href="/japacred/index.php?r=user/create" class="list-group-item">Criar</a>
			<a href="<?=$url?>" class="list-group-item">Detalhes</a>
			<a href="/japacred/index.php?r=user/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>
</div>