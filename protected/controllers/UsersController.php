<?php

class UsersController extends Q {

    public $layout = 'user';
    public $mySelf;
    public $favored=false;

    function init() {
        parent::init();
        if($this->isMobile=='yes'){
            $this->message(0,'感谢你的支持！本页面暂还在拼命制作中...');
        }
        $this->uid = zmf::filterInput($_GET['id']);
        if (!$this->uid) {
            $this->uid = zmf::uid();
        }
        if (!$this->uid) {
            $this->redirect(array('site/login'));
        }
        if ($this->uid == zmf::uid()) {
            $this->mySelf = 'yes';
        }
        $this->userInfo = Users::getUserInfo($this->uid);
        $this->pageTitle=$this->userInfo['username'].' - '.zmf::config('sitename');
        $this->pageDescription = $this->userInfo['username'] . '的【' . zmf::config('sitename') . '】的个人主页，包括TA的原创文章、精美图片及各类悉心收藏，快来看看吧！';
    }

    public function actionIndex() {
        $this->pageTitle = $this->userInfo['username'] . '的主页 - ' . zmf::config('sitename');
        $this->render('index', $data);
    }

    private function listContents($type) {
        if ($type == 'posts') {
            $sql = "SELECT * FROM {{posts}} WHERE uid='{$this->uid}' AND status=" . Posts::STATUS_PASSED . " AND classify!=".Posts::CLASSIFY_BLOG." ORDER BY cTime DESC";
        } elseif ($type == 'answer') {
            $sql = "SELECT * FROM {{answer}} WHERE uid='{$this->uid}' AND status=" . Posts::STATUS_PASSED . " ORDER BY cTime DESC";
        } elseif ($type == 'poipost') {
            $sql = "SELECT * FROM {{poi_post}} WHERE uid='{$this->uid}' AND status=" . Posts::STATUS_PASSED . " ORDER BY cTime DESC";
        }elseif($type=='yueban'){
            $sql = "SELECT * FROM {{user_yueban}} WHERE uid='{$this->uid}' AND status=" . Posts::STATUS_PASSED . " ORDER BY cTime DESC";
        }
        if (!$sql) {
            return;
        }
        Posts::getAll(array('sql' => $sql), $pages, $lists);
        $real=array();
        if (!empty($lists)) {
            foreach ($lists as $k => $v) {
                if ($type == 'poipost') {
                    $_info = Posts::getSimpleInfo(array('keyid' => $v['logid'], 'origin' => 'position'), 'title');
                    $v['poiTitle'] = $_info;
                }elseif ($type == 'answer') {
                    $_info = Posts::getSimpleInfo(array('keyid' => $v['logid'], 'origin' => 'question'), 'title');
                    $v['qtitle'] = $_info;
                }
                $real[$k]['data'] = $v;
                $real[$k]['classify'] = $type;
            }
        }
        $data = array(
            'posts' => $real,
            'pages' => $pages,
            'detail' => 'yes'
        );
        return $data;
    }

    public function actionPosts() {
        $sql = "SELECT * FROM {{posts}} WHERE uid='{$this->uid}' AND status=" . Posts::STATUS_PASSED . " ORDER BY cTime DESC";
        Posts::getAll(array('sql' => $sql), $pages, $comLists);
        $data = array(
            'posts' => $comLists,
            'pages' => $pages,
        );
        $this->pageTitle = $this->userInfo['username'] . '的文章 - ' . zmf::config('sitename');
        $this->render('posts', $data);
    }

    public function actionImages() {
        $sql = "SELECT * FROM {{attachments}} WHERE uid='{$this->uid}' ORDER BY cTime DESC";
        Posts::getAll(array('sql' => $sql), $pages, $comLists);
        $data = array(
            'posts' => $comLists,
            'pages' => $pages,
        );
        $this->pageTitle = $this->userInfo['username'] . '的相册 - ' . zmf::config('sitename');
        $this->render('images', $data);
    }

    public function actionNotice() {
        $sql = "SELECT * FROM {{notification}} WHERE uid='{$this->uid}' ORDER BY cTime DESC";
        Posts::getAll(array('sql' => $sql), $pages, $comLists);
        Notification::model()->updateAll(array('new' => 0), 'uid=:uid', array(':uid' => $this->uid));
        $data = array(
            'posts' => $comLists,
            'pages' => $pages,
        );
        $this->pageTitle = $this->userInfo['username'] . '的提醒 - ' . zmf::config('sitename');
        $this->render('notice', $data);
    }

    public function actionFavorites() {
        $sql = "SELECT * FROM {{favorites}} WHERE uid='{$this->uid}' AND classify!='user' ORDER BY cTime DESC";
        Posts::getAll(array('sql' => $sql), $pages, $lists);
        if (!empty($lists)) {
            foreach ($lists as $k => $v) {
                $type = $v['classify'];
                $_info = '';
                $_url = '';
                switch ($type) {
                    case 'posts':
                        $_info = Posts::getSimpleInfo(array('keyid' => $v['logid'], 'origin' => 'posts'));
                        $_url = Yii::app()->createUrl('posts/index', array('id' => $v['logid']));
                        break;
                    case 'answer':
                        $_info = Posts::getSimpleInfo(array('keyid' => $v['logid'], 'origin' => 'answer'));
                        $_url = Yii::app()->createUrl('question/answer', array('id' => $v['logid']));
                        break;
                    case 'poipost':
                        $_info = Posts::getSimpleInfo(array('keyid' => $v['logid'], 'origin' => 'poipost'));
                        $_url = Yii::app()->createUrl('poipost/view', array('id' => $v['logid']));
                        break;
                    case 'poitips':
                        $_info = Posts::getSimpleInfo(array('keyid' => $v['logid'], 'origin' => 'poitips'));
                        $_url = '';
                        break;
                }
                if (!$_info) {
                    unset($lists[$k]);
                    continue;
                }
                $lists[$k]['data'] = $_info;
                $lists[$k]['url'] = $_url;
                $lists[$k]['classify'] = $type;
            }
        }
        $data = array(
            'posts' => $lists,
            'pages' => $pages,
        );
        $this->pageTitle = $this->userInfo['username'] . '的收藏 - ' . zmf::config('sitename');
        $this->render('favorites', $data);
    }

    public function actionConfig() {
        if (Yii::app()->user->isGuest) {
            $this->message(0, Yii::t('default', 'loginfirst'), Yii::app()->createUrl('site/login'), 1);
        }
        $keyid = zmf::uid();
        $info = Users::getUserInfo($keyid);
        if (!$info) {
            $this->message(0, '该用户不存在，请核实');
        }
        $config = zmf::userConfig($keyid);
        $data = array(
            'info' => $info,
            'config' => $config,
        );
        $this->pageTitle = '个人设置 - ' . zmf::config('sitename');
        $this->render('config', $data);
    }

    public function actionSettings() {
        array_pop($_POST);
        $arr = $_POST;
        if (Yii::app()->user->isGuest) {
            $this->message(0, Yii::t('default', 'loginfirst'), Yii::app()->createUrl('site/login'), 1);
        }
        $uid = zmf::uid();
        foreach ($arr as $key => $val) {
            $_k = zmf::filterInput($key, 't', 1);
            $_v = zmf::filterInput($val, 't', 1);
            $sinfo = UserSetting::model()->findByAttributes(array('stype' => $_k), "uid='{$uid}'");
            $model = new UserSetting();
            if (!$sinfo) {
                $_input = array(
                    'uid' => $uid,
                    'stype' => $_k,
                    'svalue' => $_v
                );
                $model->attributes = $_input;
                if ($model->validate()) {
                    $model->save();
                }
            } elseif ($sinfo->svalue != $_v) {
                $model->updateByPk($sinfo->id, array('svalue' => $_v));
            }
        }
        zmf::setFCache("userSettings{$uid}", $arr);
        $this->redirect(array('users/config'));
    }
    
    public function actionUpdate($type) {
        if(!in_array($type,array('info','passwd'))){
            $this->message(0, '您的操作有误');
        }
        if (isset($_POST) AND !empty($_POST)) {
            $model = new Users();
            if ($type == 'info') {
                $intoData['username'] = zmf::filterInput($_POST['username'],'t',1);
                if(!$intoData['username']){
                    $this->message(0, '用户名不能为空');
                }
                //如果用户修改了用户名，则判断是否被使用
                if($intoData['username']!=$this->userInfo['username']){
                    $info=Users::getInfoByName($intoData['username']);
                    if($info){
                        $this->message(0, '该用户名已被使用');
                    }
                }
                $intoData['sex'] = tools::val('sex');
                $desc = zmf::filterInput($_POST['desc'],'t',1);
                $desc=zmf::subStr($desc,32,0,'');
            } elseif ($type == 'passwd') {
                $old = zmf::filterInput($_POST['old_password'], 't', 1);
                $info = Users::model()->findByPk($this->uid);
                if (!$old) {
                    $this->message(0, '请输入原始密码');
                } elseif (md5($old) != $info['password']) {
                    $this->message(0, '原始密码不正确');
                }
                if (!$_POST['password']) {
                    $this->message(0, '请输入密码');
                } elseif (strlen($_POST['password']) < 5) {
                    $this->message(0, '新密码过短，请重新输入');
                }
                $intoData['password'] = md5($_POST['password']);
            }
            if ($model->updateByPk($this->uid, $intoData)) {   
                if($type=='info' && $desc){
                    UserInfo::addAttr($this->uid, 'info', 'desc', $desc);
                }
                $this->message(1, '修改成功', Yii::app()->createUrl('users/config'));
            }else{
                if($type=='info' && $desc){
                    UserInfo::addAttr($this->uid, 'info', 'desc', $desc);
                }
                $this->message(1, '修改成功', Yii::app()->createUrl('users/config'));
            }
        }
        $data = array(
            'info' => $this->userInfo,
            'type' => $type,
        );
        $this->render('update', $data);
    }

}
