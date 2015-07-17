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
          <li><a href="http://192.168.0.123/naodong/">首页</a></li>
          <li><a href="/naodong/medias">媒体</a></li>          
      </ul>
            <ul class="nav navbar-nav navbar-right">
        <li><a href="/naodong/site/login">登录</a></li>
        <li><a href="/naodong/site/reg">注册</a></li>
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
          <li><a href="http://192.168.0.123/naodong/">首页</a></li>
          <li><a href="/naodong/medias">媒体</a></li>          
      </ul>
            <ul class="nav navbar-nav navbar-right">
        <li><a href="/naodong/site/login">登录</a></li>
        <li><a href="/naodong/site/reg">注册</a></li>
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
<?php $this->endContent(); ?>