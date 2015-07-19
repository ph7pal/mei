<div class="form-group">
    <?php echo $form->labelEx($modelUser,'username',array('class'=>'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo $form->textField($modelUser,'username',array('class'=>'form-control')); ?>
        <?php echo $form->error($modelUser,'username'); ?>
    </div>        
</div>
<div class="form-group">
    <?php echo $form->labelEx($modelUser,'phone',array('class'=>'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo $form->textField($modelUser,'phone',array('class'=>'form-control')); ?>
        <?php echo $form->error($modelUser,'phone'); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($modelUser,'email',array('class'=>'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo $form->textField($modelUser,'email',array('class'=>'form-control')); ?>
        <?php echo $form->error($modelUser,'email'); ?>
    </div>        
</div>
<div class="form-group">
    <?php echo $form->labelEx($modelUser,'password',array('class'=>'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo $form->passwordField($modelUser,'password',array('class'=>'form-control')); ?>
        <?php echo $form->error($modelUser,'password'); ?>
    </div>        
</div>