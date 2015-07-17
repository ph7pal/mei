<?php
/* @var $this DoctorCasesController */
/* @var $model DoctorCases */

$this->breadcrumbs=array(
	'Doctor Cases'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DoctorCases', 'url'=>array('index')),
	array('label'=>'Create DoctorCases', 'url'=>array('create')),
	array('label'=>'View DoctorCases', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DoctorCases', 'url'=>array('admin')),
);
?>

<h1>Update DoctorCases <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>