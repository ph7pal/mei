<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ads-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'attachid'); ?>
		<?php echo $form->textField($model,'attachid',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'attachid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'width'); ?>
		<?php echo $form->textField($model,'width',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'width'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'hits'); ?>
		<?php echo $form->textField($model,'hits',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hits'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'start_time'); ?>
		<?php echo $form->textField($model,'start_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'start_time'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'expired_time'); ?>
		<?php echo $form->textField($model,'expired_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'expired_time'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'order'); ?>
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
		<?php echo $form->labelEx($model,'classify'); ?>
		<?php echo $form->textField($model,'classify',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'classify'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid'); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'system'); ?>
		<?php echo $form->textField($model,'system'); ?>
		<?php echo $form->error($model,'system'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新增' : '更新',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->