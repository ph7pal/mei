<?php echo CHtml::link('用户注册',array('site/reg'),array('class'=>'btn btn-block btn-'.(!$_GET['type']?'danger':'default')));?>
<?php echo CHtml::link('医生注册',array('site/reg','type'=>'doctor'),array('class'=>'btn btn-block btn-'.($_GET['type']=='doctor'?'danger':'default')));?>
<?php echo CHtml::link('医院注册',array('site/reg','type'=>'hospital'),array('class'=>'btn btn-block btn-'.($_GET['type']=='hospital'?'danger':'default')));?>
<p>已是会员？<?php echo CHtml::link('立即登录',array('site/login'));?></p>