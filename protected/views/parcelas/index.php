<?php
/* @var $this ParcelasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parcelases'=>array('index'),
);
?>

<h1>Parcelas </h1> 

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<br>
