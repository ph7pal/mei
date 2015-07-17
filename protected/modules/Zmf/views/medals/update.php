<?php
/* @var $this MedalsController */
/* @var $model Medals */

$this->breadcrumbs=array(
	'Medals'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Medals', 'url'=>array('index')),
	array('label'=>'Create Medals', 'url'=>array('create')),
	array('label'=>'View Medals', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Medals', 'url'=>array('admin')),
);
?>

<h1>Update Medals <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>