<?php
/* @var $this XuqiuController */
/* @var $model Xuqiu */

$this->breadcrumbs=array(
	'Xuqius'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Xuqiu', 'url'=>array('index')),
	array('label'=>'Create Xuqiu', 'url'=>array('create')),
	array('label'=>'View Xuqiu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Xuqiu', 'url'=>array('admin')),
);
?>

<h1>Update Xuqiu <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>