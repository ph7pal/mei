<div class="main-page form-horizontal">    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hospital-form',
	'enableAjaxValidation'=>false,
)); ?>
    <?php echo $form->errorSummary($modelUser); ?>
    <?php echo $form->errorSummary($model); ?>
    <div class="row">    
	<div class="form-group">
            <?php echo $form->labelEx($model,'title',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->textField($model,'title',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'title'); ?>
            </div>
	</div>

	<div class="form-group">
            <?php echo $form->labelEx($model,'nickname',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->textField($model,'nickname',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'nickname'); ?>
            </div>
		
	</div>
    
        <div class="form-group">
            <?php echo $form->labelEx($modelUser,'areaid',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->textField($modelUser,'areaid',array('class'=>'form-control')); ?>
                <?php echo $form->error($modelUser,'areaid'); ?>
            </div>
        </div>

	<div class="form-group">
            <?php echo $form->labelEx($model,'address',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->textField($model,'address',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'address'); ?>
            </div>
		
	</div>

	<div class="form-group">
            <?php echo $form->labelEx($model,'classify',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->dropDownList($model,'classify',  Hospital::exClassify('admin'),array('class'=>'form-control','empty'=>'--请选择--')); ?>
		<?php echo $form->error($model,'classify'); ?>
            </div>
		
	</div>

	<div class="form-group">
            <?php echo $form->labelEx($model,'class',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->dropDownList($model,'class',  Hospital::exClass('admin'),array('class'=>'form-control','empty'=>'--请选择--')); ?>
		<?php echo $form->error($model,'class'); ?>
            </div>
		
	</div>

	<div class="form-group">
            <label class="col-sm-2 control-label required">医院资质 <span class="required">*</span></label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-6">
                        <?php echo $form->textField($model,'xukezheng',array('class'=>'form-control')); ?>	
                    </div>
                    <div class="col-sm-6">
                        <?php echo $form->textField($model,'zhizhao',array('class'=>'form-control')); ?>
                    </div>
                </div>
                <?php echo $form->error($model,'xukezheng'); ?>
		<?php echo $form->error($model,'zhizhao'); ?>
            </div>
	</div>

	<div class="form-group">
            <?php echo $form->labelEx($model,'number',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->textField($model,'number',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'number'); ?>
            </div>
		
	</div>

	<div class="form-group">
            <?php echo $form->labelEx($model,'url',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo $form->textField($model,'url',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'url'); ?>
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