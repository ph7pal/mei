<?php
/* @var $this XuqiuController */
/* @var $model Xuqiu */

$this->breadcrumbs=array(
	'Xuqius'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Xuqiu', 'url'=>array('index')),
	array('label'=>'Create Xuqiu', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#xuqiu-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Xuqius</h1>

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
	'id'=>'xuqiu-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nickname',
		'sex',
		'phone',
		'content',
		'areaid',
		/*
		'hits',
		'status',
		'ip',
		'cTime',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
