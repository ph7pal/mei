<?php

/**
 * This is the model class for table "{{hospital}}".
 *
 * The followings are the available columns in table '{{hospital}}':
 * @property string $uid
 * @property string $title
 * @property string $nickname
 * @property string $address
 * @property integer $classify
 * @property integer $class
 * @property string $attachid
 * @property string $xukezheng
 * @property string $zhizhao
 * @property string $number
 * @property string $url
 * @property string $intro
 * @property string $content
 * @property string $score
 * @property string $scorer
 * @property string $score_fuwu
 * @property string $score_hj
 * @property string $score_xg
 * @property string $lat
 * @property string $long
 * @property string $doctors
 * @property string $youhui
 * @property string $favors
 */
class Hospital extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{hospital}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, nickname, address, classify, class, xukezheng, zhizhao, number', 'required'),
            array('classify, class', 'numerical', 'integerOnly' => true),
            array('uid, attachid, xukezheng, zhizhao, scorer, score_fuwu, score_hj, score_xg, doctors, youhui, favors', 'length', 'max' => 10),
            array('title, nickname, address, number, url, intro, content, lat, long', 'length', 'max' => 255),
            array('score', 'length', 'max' => 6),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'uid' => '所属用户',
            'title' => '医院名称',
            'nickname' => '医院别名',
            'address' => '医院地址',
            'classify' => '医院类型',
            'class' => '医院等级',
            'attachid' => '封面图',
            'xukezheng' => '许可证图片ID',
            'zhizhao' => '执照图片ID',
            'number' => '医院电话',
            'url' => '医院网址',
            'intro' => '理念',
            'content' => '简介',
            'score' => '评分',
            'scorer' => '评分人数',
            'score_fuwu' => '医院服务',
            'score_hj' => '就医环境',
            'score_xg' => '术后效果',
            'lat' => '纬度',
            'long' => '经度',
            'doctors' => '医生数',
            'youhui' => '优惠数',
            'favors' => '收藏数',
        );
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Hospital the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 医院的类型
     * @param type $type
     * @return string
     */
    public static function exClassify($type) {
        $arr = array(
            '1' => '公立',
            '2' => '私立',
        );
        if ($type == 'admin') {
            return $arr;
        }
        return $arr[$type];
    }
    
    /**
     * 医院的等级
     * @param type $type
     * @return string
     */
    public static function exClass($type) {
        $arr = array(
            '1' => '医院',
            '2' => '诊所',
            '3' => '门诊部',
        );
        if ($type == 'admin') {
            return $arr;
        }
        return $arr[$type];
    }

}
