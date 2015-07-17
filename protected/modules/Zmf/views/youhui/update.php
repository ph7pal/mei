<?php
/* @var $this YouhuiController */
/* @var $model Youhui */

$this->breadcrumbs=array(
	'Youhuis'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Youhui', 'url'=>array('index')),
	array('label'=>'Create Youhui', 'url'=>array('create')),
	array('label'=>'View Youhui', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Youhui', 'url'=>array('admin')),
);
?>

<h1>Update Youhui <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>