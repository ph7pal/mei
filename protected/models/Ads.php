<?php

/**
 * This is the model class for table "{{ads}}".
 *
 * The followings are the available columns in table '{{ads}}':
 * @property string $id
 * @property string $title
 * @property string $url
 * @property string $attachid
 * @property string $width
 * @property string $height
 * @property string $description
 * @property string $hits
 * @property string $start_time
 * @property string $expired_time
 * @property string $position
 * @property string $order
 * @property integer $status
 * @property string $cTime
 * @property string $classify
 * @property integer $uid
 * @property integer $system
 * @property string $code
 */
class Ads extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{ads}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, url, attachid, width, height, description, hits, start_time, expired_time, position, order, status, cTime, classify, uid, system, code', 'required'),
            array('status, uid, system', 'numerical', 'integerOnly' => true),
            array('title', 'length', 'max' => 50),
            array('url, attachid, description, code', 'length', 'max' => 255),
            array('width, height, hits, start_time, expired_time, order, cTime', 'length', 'max' => 10),
            array('position', 'length', 'max' => 40),
            array('classify', 'length', 'max' => 16),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title, url, attachid, width, height, description, hits, start_time, expired_time, position, order, status, cTime, classify, uid, system, code', 'safe', 'on' => 'search'),
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
            'id' => 'ID',
            'title' => '标题',
            'url' => '链接',
            'attachid' => '图片',
            'width' => '宽度',
            'height' => '高度',
            'description' => '描述',
            'hits' => '点击',
            'start_time' => '起始时间',
            'expired_time' => '结束时间',
            'position' => '显示位置',
            'order' => '排序',
            'status' => '状态',
            'cTime' => '创建时间',
            'classify' => '分类',
            'uid' => '谁创建',
            'system' => '是否系统项',
            'code' => '代码',
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

        $criteria->compare('id', $this->id, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('url', $this->url, true);
        $criteria->compare('attachid', $this->attachid, true);
        $criteria->compare('width', $this->width, true);
        $criteria->compare('height', $this->height, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('hits', $this->hits, true);
        $criteria->compare('start_time', $this->start_time, true);
        $criteria->compare('expired_time', $this->expired_time, true);
        $criteria->compare('position', $this->position, true);
        $criteria->compare('order', $this->order, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('cTime', $this->cTime, true);
        $criteria->compare('classify', $this->classify, true);
        $criteria->compare('uid', $this->uid);
        $criteria->compare('system', $this->system);
        $criteria->compare('code', $this->code, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Ads the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
