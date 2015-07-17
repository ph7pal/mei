<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medals-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'imgurl'); ?>
		<?php echo $form->textField($model,'imgurl',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'imgurl'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'classify'); ?>
		<?php echo $form->textField($model,'classify'); ?>
		<?php echo $form->error($model,'classify'); ?>
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