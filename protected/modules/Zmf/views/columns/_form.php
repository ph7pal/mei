<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'columns-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'belongid'); ?>
		<?php echo $form->textField($model,'belongid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'belongid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pinyin'); ?>
		<?php echo $form->textField($model,'pinyin',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pinyin'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'classify'); ?>
		<?php echo $form->textField($model,'classify',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'classify'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'attachid'); ?>
		<?php echo $form->textField($model,'attachid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'attachid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'order'); ?>
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
		<?php echo $form->labelEx($model,'cTime'); ?>
		<?php echo $form->textField($model,'cTime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cTime'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'system'); ?>
		<?php echo $form->textField($model,'system'); ?>
		<?php echo $form->error($model,'system'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'post_fields'); ?>
		<?php echo $form->textField($model,'post_fields',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'post_fields'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新增' : '更新',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->