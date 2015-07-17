<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'xuqiu-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'nickname'); ?>
		<?php echo $form->textField($model,'nickname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nickname'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'areaid'); ?>
		<?php echo $form->textField($model,'areaid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'areaid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'hits'); ?>
		<?php echo $form->textField($model,'hits',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hits'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ip'); ?>
		<?php echo $form->textField($model,'ip'); ?>
		<?php echo $form->error($model,'ip'); ?>
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