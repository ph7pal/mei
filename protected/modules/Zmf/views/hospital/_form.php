<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hospital-form',
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
		<?php echo $form->labelEx($model,'nickname'); ?>
		<?php echo $form->textField($model,'nickname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nickname'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'classify'); ?>
		<?php echo $form->textField($model,'classify'); ?>
		<?php echo $form->error($model,'classify'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'class'); ?>
		<?php echo $form->textField($model,'class'); ?>
		<?php echo $form->error($model,'class'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'attachid'); ?>
		<?php echo $form->textField($model,'attachid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'attachid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'xukezheng'); ?>
		<?php echo $form->textField($model,'xukezheng',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'xukezheng'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'zhizhao'); ?>
		<?php echo $form->textField($model,'zhizhao',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'zhizhao'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'intro'); ?>
		<?php echo $form->textField($model,'intro',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'intro'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'scorer'); ?>
		<?php echo $form->textField($model,'scorer',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'scorer'); ?>
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
		<?php echo $form->labelEx($model,'lat'); ?>
		<?php echo $form->textField($model,'lat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lat'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'long'); ?>
		<?php echo $form->textField($model,'long',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'long'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'doctors'); ?>
		<?php echo $form->textField($model,'doctors',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'doctors'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'youhui'); ?>
		<?php echo $form->textField($model,'youhui',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'youhui'); ?>
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