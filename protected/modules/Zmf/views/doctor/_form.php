<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'doctor-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'classify'); ?>
		<?php echo $form->textField($model,'classify',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'classify'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'localarea'); ?>
		<?php echo $form->textField($model,'localarea',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'localarea'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'practice_number'); ?>
		<?php echo $form->textField($model,'practice_number',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'practice_number'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'check_number'); ?>
		<?php echo $form->textField($model,'check_number',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'check_number'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'hospital'); ?>
		<?php echo $form->textField($model,'hospital',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hospital'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'hospital_name'); ?>
		<?php echo $form->textField($model,'hospital_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'hospital_name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'attachid'); ?>
		<?php echo $form->textField($model,'attachid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'attachid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'job_title'); ?>
		<?php echo $form->textField($model,'job_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'job_title'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'service_concept'); ?>
		<?php echo $form->textField($model,'service_concept',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'service_concept'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'education'); ?>
		<?php echo $form->textField($model,'education',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'education'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'idcard'); ?>
		<?php echo $form->textField($model,'idcard',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'idcard'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'posts'); ?>
		<?php echo $form->textField($model,'posts',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'posts'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cases'); ?>
		<?php echo $form->textField($model,'cases',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cases'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'thanks'); ?>
		<?php echo $form->textField($model,'thanks',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'thanks'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'yuyue'); ?>
		<?php echo $form->textField($model,'yuyue',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'yuyue'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'scorer'); ?>
		<?php echo $form->textField($model,'scorer',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'scorer'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'hits'); ?>
		<?php echo $form->textField($model,'hits',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hits'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新增' : '更新',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->