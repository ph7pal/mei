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
            array('uid, title, nickname, address, classify, class, attachid, xukezheng, zhizhao, number, url, intro, content, score, scorer, score_fuwu, score_hj, score_xg, lat, long, doctors, youhui, favors', 'required'),
            array('classify, class', 'numerical', 'integerOnly' => true),
            array('uid, attachid, xukezheng, zhizhao, scorer, score_fuwu, score_hj, score_xg, doctors, youhui, favors', 'length', 'max' => 10),
            array('title, nickname, address, number, url, intro, content, lat, long', 'length', 'max' => 255),
            array('score', 'length', 'max' => 6),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('uid, title, nickname, address, classify, class, attachid, xukezheng, zhizhao, number, url, intro, content, score, scorer, score_fuwu, score_hj, score_xg, lat, long, doctors, youhui, favors', 'safe', 'on' => 'search'),
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
            'title' => '名称',
            'nickname' => '别名',
            'address' => '地址',
            'classify' => '医院类型：公立、私立',
            'class' => '医院等级：医院、诊所、门诊部',
            'attachid' => '封面图',
            'xukezheng' => '许可证图片ID',
            'zhizhao' => '执照图片ID',
            'number' => '电话',
            'url' => '网址',
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
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('uid', $this->uid, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('nickname', $this->nickname, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('classify', $this->classify);
        $criteria->compare('class', $this->class);
        $criteria->compare('attachid', $this->attachid, true);
        $criteria->compare('xukezheng', $this->xukezheng, true);
        $criteria->compare('zhizhao', $this->zhizhao, true);
        $criteria->compare('number', $this->number, true);
        $criteria->compare('url', $this->url, true);
        $criteria->compare('intro', $this->intro, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('score', $this->score, true);
        $criteria->compare('scorer', $this->scorer, true);
        $criteria->compare('score_fuwu', $this->score_fuwu, true);
        $criteria->compare('score_hj', $this->score_hj, true);
        $criteria->compare('score_xg', $this->score_xg, true);
        $criteria->compare('lat', $this->lat, true);
        $criteria->compare('long', $this->long, true);
        $criteria->compare('doctors', $this->doctors, true);
        $criteria->compare('youhui', $this->youhui, true);
        $criteria->compare('favors', $this->favors, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
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

}
