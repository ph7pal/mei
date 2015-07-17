<?php
/* @var $this ColumnsController */
/* @var $model Columns */

$this->breadcrumbs=array(
	'Columns'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Columns', 'url'=>array('index')),
	array('label'=>'Create Columns', 'url'=>array('create')),
	array('label'=>'View Columns', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Columns', 'url'=>array('admin')),
);
?>

<h1>Update Columns <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>