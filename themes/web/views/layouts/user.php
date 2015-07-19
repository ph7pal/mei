<?php $this->beginContent('/layouts/common'); ?>
<div class="navbar navbar-default" role="navigation">
  <div class="wrapper">
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><?php echo CHtml::link('首页',zmf::config('baseurl'));?></li>
            <?php $topcols=  Columns::navbar();foreach($topcols as $col){?>
            <li class="<?php echo $col['active'] ? 'active' : ''; ?>"><?php echo CHtml::link($col['title'],$col['url']);?></li>
            <?php }?>          
        </ul>        
    </div><!--/.nav-collapse -->
  </div> 
</div>
<div class="jumbotron posthead" id="posthead">
      <div class="thumbnail">
        <img data-src="holder.js/100%x180" class="img-circle" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlOGE0YjI4YTEgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGU4YTRiMjhhMSI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 150px; width: 150px; display: block;">
        <div class="caption">
          <h1>文征明</h1>
          <p><a href="/guwen/posts/index?colid=15">明代</a></p>
        </div>
      </div>
</div>
<div class="navbar navbar-primary" role="navigation">
  <div class="wrapper">
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><?php echo CHtml::link('首页',array('users/index','id'=>$this->uid));?></li>
            <li><?php echo CHtml::link('美丽日记',array('users/index','id'=>$this->uid));?></li>
            <li><?php echo CHtml::link('问答',array('users/index','id'=>$this->uid));?></li>
            <li><?php echo CHtml::link('兴趣圈子',array('users/index','id'=>$this->uid));?></li>            
        </ul>
        <?php if (!Yii::app()->user->isGuest) { ?>
            <?php $noticeNum=  Notification::getNum();if($noticeNum>0){$_notice='提醒<span class="top-nav-count">'.$noticeNum.'</span>';}else{$_notice='提醒';}?>
            <ul class="nav navbar-nav navbar-right">
              <li><?php echo CHtml::link($_notice, array('users/notice'),array('role'=>'menuitem')); ?></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->truename;?> <span class="caret"></span></a>               
                  <ul class="dropdown-menu">
                    <li><?php echo CHtml::link(zmf::t('homepage'), array('users/index', 'id' => Yii::app()->user->id),array('role'=>'menuitem')); ?></li>
                    <li><?php echo CHtml::link(zmf::t('favorite'), array('users/favorites'),array('role'=>'menuitem')); ?></li>
                    <li><?php echo CHtml::link(zmf::t('setting'), array('users/config'),array('role'=>'menuitem')); ?></li>
                    <li><?php echo CHtml::link(zmf::t('logout'), array('site/logout'),array('role'=>'menuitem')); ?></li>
                  </ul>
              </li>
            </ul>
        <?php }?>
    </div><!--/.nav-collapse -->
  </div>
</div>
<?php echo $content; ?>
<?php $this->endContent(); ?>