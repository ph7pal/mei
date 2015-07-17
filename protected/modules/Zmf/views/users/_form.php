<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'classify'); ?>
		<?php echo $form->textField($model,'classify'); ?>
		<?php echo $form->error($model,'classify'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'groupid'); ?>
		<?php echo $form->textField($model,'groupid',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'groupid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'last_login_ip'); ?>
		<?php echo $form->textField($model,'last_login_ip'); ?>
		<?php echo $form->error($model,'last_login_ip'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'last_login_time'); ?>
		<?php echo $form->textField($model,'last_login_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'last_login_time'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'login_count'); ?>
		<?php echo $form->textField($model,'login_count',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'login_count'); ?>
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
		<?php echo $form->labelEx($model,'emailstatus'); ?>
		<?php echo $form->textField($model,'emailstatus'); ?>
		<?php echo $form->error($model,'emailstatus'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'hash'); ?>
		<?php echo $form->textField($model,'hash',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'hash'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'areaid'); ?>
		<?php echo $form->textField($model,'areaid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'areaid'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新增' : '更新',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->