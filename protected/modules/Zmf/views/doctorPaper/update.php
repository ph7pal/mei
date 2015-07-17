<?php
/* @var $this DoctorPaperController */
/* @var $model DoctorPaper */

$this->breadcrumbs=array(
	'Doctor Papers'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DoctorPaper', 'url'=>array('index')),
	array('label'=>'Create DoctorPaper', 'url'=>array('create')),
	array('label'=>'View DoctorPaper', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DoctorPaper', 'url'=>array('admin')),
);
?>

<h1>Update DoctorPaper <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>