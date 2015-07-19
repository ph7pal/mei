<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-cases-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'uid'); ?>
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
		<?php echo $form->labelEx($model,'xiangmu'); ?>
		<?php echo $form->textField($model,'xiangmu',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'xiangmu'); ?>
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
		<?php echo $form->labelEx($model,'score_fuwu'); ?>
		<?php echo $form->textField($model,'score_fuwu',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'score_fuwu'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'score_hj'); ?>
		<?php echo $form->textField($model,'score_hj',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'score_hj'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'score_xg'); ?>
		<?php echo $form->textField($model,'score_xg',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'score_xg'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'buy_time'); ?>
		<?php echo $form->textField($model,'buy_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'buy_time'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'favors'); ?>
		<?php echo $form->textField($model,'favors',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'favors'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? '新增' : '更新',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->