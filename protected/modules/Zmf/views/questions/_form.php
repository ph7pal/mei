<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'questions-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'xiangmu'); ?>
		<?php echo $form->textField($model,'xiangmu',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'xiangmu'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'truename'); ?>
		<?php echo $form->textField($model,'truename',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'truename'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ip'); ?>
		<?php echo $form->textField($model,'ip'); ?>
		<?php echo $form->error($model,'ip'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cTime'); ?>
		<?php echo $form->textField($model,'cTime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cTime'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'hits'); ?>
		<?php echo $form->textField($model,'hits',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hits'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'favors'); ?>
		<?php echo $form->textField($model,'favors',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'favors'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新增' : '更新',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->