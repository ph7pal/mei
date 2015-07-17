<?php
/* @var $this XiangmuController */
/* @var $model Xiangmu */

$this->breadcrumbs=array(
	'Xiangmus'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Xiangmu', 'url'=>array('index')),
	array('label'=>'Create Xiangmu', 'url'=>array('create')),
	array('label'=>'View Xiangmu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Xiangmu', 'url'=>array('admin')),
);
?>

<h1>Update Xiangmu <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>