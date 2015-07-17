<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'doctor-paper-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pub_time'); ?>
		<?php echo $form->textField($model,'pub_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pub_time'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pub_area'); ?>
		<?php echo $form->textField($model,'pub_area',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pub_area'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cTime'); ?>
		<?php echo $form->textField($model,'cTime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cTime'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新增' : '更新',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->