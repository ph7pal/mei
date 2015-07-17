<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'youhui-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'attachid'); ?>
		<?php echo $form->textField($model,'attachid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'attachid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'hospital'); ?>
		<?php echo $form->textField($model,'hospital',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hospital'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'doctor'); ?>
		<?php echo $form->textField($model,'doctor',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'doctor'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'desc'); ?>
		<?php echo $form->textField($model,'desc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'desc'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'startTime'); ?>
		<?php echo $form->textField($model,'startTime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'startTime'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'endTime'); ?>
		<?php echo $form->textField($model,'endTime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'endTime'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'oldPrice'); ?>
		<?php echo $form->textField($model,'oldPrice',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'oldPrice'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'yuyue'); ?>
		<?php echo $form->textField($model,'yuyue',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'yuyue'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新增' : '更新',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->