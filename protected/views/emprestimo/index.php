<?php
/* @var $this EmprestimoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emprestimos',
);
?>

<h1>Empréstimos</h1>

	<div class="row">
		<div class="col-md-8">
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
	</div>	

<div class="col-md-4">
	<div class="list-group" >
		<a href="/japacred/index.php?r=emprestimo/create" class="list-group-item">Fazer Empréstimo</a>
		<a href="/japacred/index.php?r=emprestimo/admin" class="list-group-item">Gerenciamento de Empréstimos</a>
	</div>
</div>
