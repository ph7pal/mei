<?php
/* @var $this HospitalController */
/* @var $model Hospital */

$this->breadcrumbs=array(
	'Hospitals'=>array('index'),
	$model->title=>array('view','id'=>$model->uid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hospital', 'url'=>array('index')),
	array('label'=>'Create Hospital', 'url'=>array('create')),
	array('label'=>'View Hospital', 'url'=>array('view', 'id'=>$model->uid)),
	array('label'=>'Manage Hospital', 'url'=>array('admin')),
);
?>

<h1>Update Hospital <?php echo $model->uid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>