<?php
/* @var $this UserCasesController */
/* @var $model UserCases */

$this->breadcrumbs=array(
	'User Cases'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserCases', 'url'=>array('index')),
	array('label'=>'Create UserCases', 'url'=>array('create')),
	array('label'=>'View UserCases', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserCases', 'url'=>array('admin')),
);
?>

<h1>Update UserCases <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>