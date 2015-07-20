<div class="main-page form-horizontal">
    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'users-addUser-form',
            'enableAjaxValidation'=>false,
    )); ?>
    <?php echo $form->errorSummary($modelUser); ?>
    <div class="row">
        <?php $this->renderPartial('/site/userCommon',array('modelUser'=>$modelUser,'form'=>$form));?>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <?php echo CHtml::submitButton($model->isNewRecord ? '新增' : '更新',array('class'=>'btn btn-primary')); ?>
            </div>
	</div>
    </div>
    <?php $this->endWidget(); ?>
</div>
<div class="aside-page">
    <?php $this->renderPartial('/site/regAside');?>    
</div>