<?php $this->beginContent('/layouts/common'); ?>
<?php if($this->wholeNotice){?>
    <div class="alert alert-warning" id="wholeNotice-bar">
        <div class="container"><?php echo $this->wholeNotice;?></div>            
    </div>
<?php }?>
<div class="navbar navbar-default" role="navigation">
  <div class="wrapper">
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
          <li><?php echo CHtml::link('欢迎来到去哪儿美！',zmf::config('baseurl'));?></li>
          <?php if (Yii::app()->user->isGuest) { ?>            
              <li><?php echo CHtml::link(zmf::t('login'), array('site/login')); ?></li>
              <li><?php echo CHtml::link('用户注册', array('site/reg')); ?></li>
              <li><?php echo CHtml::link('医生注册', array('site/reg','type'=>'doctor')); ?></li>
              <li><?php echo CHtml::link('医院入驻', array('site/reg','type'=>'hospital')); ?></li>
            <?php }else{ ?>
              <?php $noticeNum=  Notification::getNum();if($noticeNum>0){$_notice='提醒<span class="top-nav-count">'.$noticeNum.'</span>';}else{$_notice='提醒';}?>
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
        <?php }?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#">客服电话：400-820-8820</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div> 
</div>
<div class="wrapper">
  <a href="" title="">
  <div class="logo" style="background:url() no-repeat left;height: 120px"></div>
  </a>
</div>
<div class="navbar navbar-primary" role="navigation">
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
<div class="jumbotron">
    <div class="wrapper" style="height: 400px">
        
    </div>
</div>

<div class="wrapper">
<?php echo $content; ?>
</div>
<div class="faith">
    <div class="ym-wrap">
        <div class="tb">
            <span class="prof">
                <h2>100%认证</h2>
                <p>认证医院均通过实地资质审核</p>
            </span>
            <span class="sunl">
                <h2>价格实惠</h2>
                <p>特惠价格透明消费</p>
            </span>
            <span class="conv">
                <h2>专业安全</h2>
                <p>因为专注所以专业</p>
            </span>
            <span class="cheep">
                <h2>一对一</h2>
                <p>美丽定制医生一对一服务</p>
            </span>
        </div>
    </div>
</div>
<div id="footer_Bk">
    <div class="footCon">
        <ul>
            <li class="img img_first"><span class="ft_pic1"></span></li>
            <li class="link_a"><a target="_blank" href="/zhengxingzhongxin/shehuameixiong/">胸部整形</a><a target="_blank" href="/zhengxingzhongxin/wanmeiliankuo/">面部整形</a><a target="_blank" href="/zhengxingzhongxin/xizhishoushen/">溶脂瘦身</a><a target="_blank" href="/zhengxingzhongxin/simi/">私密整形</a><a target="_blank" href="/zhengxingzhongxin/yanbu/">眼部整形</a><a target="_blank" href="/zhengxingzhongxin/shibaixiufu/">失败修复</a><a target="_blank" href="/zhengxingzhongxin/chunbu/">唇部整形</a><a target="_blank" href="/zhengxingzhongxin/bibu/">鼻部整形</a></li>   
            <li class="img"><span class="ft_pic2"></span></li>
            <li class="link_a">
                <a target="_blank" href="/meifuzhongxin/bingdiantuomao/">永久脱毛</a><a target="_blank" href="/meifuzhongxin/quban/">祛斑祛痘</a><a target="_blank" href="/meifuzhongxin/nenfumeibai/">美白嫩肤</a><a target="_blank" href="/meifuzhongxin/wenxiu/">纹绣</a><a target="_blank" href="/meifuzhongxin/chuzhou/">紧肤除皱</a><a target="_blank" href="/meifuzhongxin/wzms/">微针美塑</a></li>
            <li class="img"><span class="ft_pic3"></span></li>
            <li class="link_a"><a target="_blank" href="/wuchuangzhongxin/shoulianzhen/">瘦脸针</a><a target="_blank" href="/wuchuangzhongxin/boniaosuan/">玻尿酸</a><a target="_blank" href="/wuchuangzhongxin/BOTOX/">BOTOX</a><a target="_blank" href="/wuchuangzhongxin/shuangmeijiaoyuandanbai/">双美胶原蛋白</a><a target="_blank" href="/wuchuangzhongxin/prp/">prp</a><a target="_blank" href="/wuchuangzhongxin/shoutuizhen/">瘦小腿</a><a target="_blank" href="/wuchuangzhongxin/rzz/">溶脂针</a><a target="_blank" href="/wuchuangzhongxin/meibaizhen/">美白针</a></li>
            <li class="img"><span class="ft_pic4"></span></li>
            <li class="link_a"> <a target="_top" href="/lirenpinpai/lrjj/2012/0721/6.html">医院简介</a> <a target="_top" href="/lirenpinpai/lirenrongyu/">医院荣誉</a> <a target="_top" href="/zhuanjiatuandui/">专家风采</a> <a target="_top" href="/">金牌项目</a> <a target="_top" href="/chenggonganli/">真人案例</a> <a target="_top" href="/lirenpinpai/cclx/">联系我们</a> </li>
        </ul>
    </div>
</div>
<div class="footer_us">
    <div class="Con">     
        <div class="txt">
            <p>某某某整形医院版权所有   E-mail：XXXXX@163.com &nbsp;&nbsp;&nbsp; 备案号：渝ICP备xxxxxxx<br>
                地址：某某某市高新区科技路30号   美丽热线：023-0000000&nbsp;&nbsp;
                <a title="站长统计" target="_blank" href="http://www.qnamei.com/"><img vspace="0" hspace="0" border="0" src="http://icon.cnzz.com/img/pic.gif"></a>
                <br>
                乘车线路：14路、28路、29路、206、207路、210路、211路、212路、217路、218路、219路<br>
            </p>
        </div>
        <div class="logo"></div>
    </div>
</div>
<?php $this->endContent(); ?>