<?php
/* @var $this EmprestimoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emprestimos',
);
?>

<h1>Empr�stimos</h1>

	<div class="row">
		<div class="col-md-8">
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
	</div>	

<div class="col-md-4">
	<div class="list-group" >
		<a href="/japacred/index.php?r=emprestimo/create" class="list-group-item">Fazer Empr�stimo</a>
		<a href="/japacred/index.php?r=emprestimo/admin" class="list-group-item">Gerenciamento de Empr�stimos</a>
	</div>
</div>
