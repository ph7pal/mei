<div class="main-page form-horizontal">
    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'doctor-form',
	'enableAjaxValidation'=>false,
)); ?>
    <div class="row">
        <div class="form-group">
            <?php echo $form->labelEx($model,'localarea',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->textField($model,'localarea',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'localarea'); ?>
            </div>
	</div>
    
        <div class="form-group">
            <?php echo $form->labelEx($model,'practice_number',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->textField($model,'practice_number',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'practice_number'); ?>
            </div>
	</div>
    
        <div class="form-group">
            <?php echo $form->labelEx($model,'hospital_name',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->textField($model,'hospital_name',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'hospital_name'); ?>
            </div>
	</div>
    
        <div class="form-group">
            <?php echo $form->labelEx($model,'check_number',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->textField($model,'check_number',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'check_number'); ?>
            </div>
	</div>

	<div class="form-group">
            <?php echo $form->labelEx($model,'attachid',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->textField($model,'attachid',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'attachid'); ?>
            </div>
	</div>
        <div class="more-awesome"><span>登录账号</span></div>
        <?php $this->renderPartial('/site/userCommon',array('modelUser'=>$modelUser,'form'=>$form));?>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <?php echo CHtml::submitButton($model->isNewRecord ? '新增' : '更新',array('class'=>'btn btn-primary')); ?>
            </div>
	</div>
    </div>
<?php $this->endWidget(); ?>    
</div><!-- form -->
<div class="aside-page">
    <?php $this->renderPartial('/site/regAside');?>
</div>