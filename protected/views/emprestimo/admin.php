<?php
/* @var $this EmprestimoController */
/* @var $model Emprestimo */

$this->breadcrumbs=array(
	'Emprestimos'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#emprestimo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciamento de Empréstimos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'emprestimo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'header'=>'Valor',
			'name'  =>'valor',
			'value' =>'$data->formatPrice($data->valor)',
		),
		'parcelas',
		array(
			'header'=>'Valor Parcela',
			'name'  =>'valParcela',
			'value' =>'$data->formatPrice($data->valParcela)',
		),
		'id_user',
		array(
			'header'=>'Valor CET',
			'name'  =>'valorcet',
			'value' =>'$data->formatPrice($data->valorcet)',
		),
		'data',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<div>
	<div class="col-md-4">
		<a href="/japacred/index.php?r=emprestimo/index" class="list-group-item ">Lista</a>
		<a href="/japacred/index.php?r=emprestimo/create" class="list-group-item">Criar</a>
	</div>	
</div>