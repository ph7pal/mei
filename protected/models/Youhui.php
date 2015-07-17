<?php

/**
 * This is the model class for table "{{youhui}}".
 *
 * The followings are the available columns in table '{{youhui}}':
 * @property string $id
 * @property string $attachid
 * @property string $hospital
 * @property string $doctor
 * @property string $title
 * @property string $desc
 * @property string $startTime
 * @property string $endTime
 * @property string $price
 * @property string $oldPrice
 * @property string $yuyue
 * @property string $comments
 */
class Youhui extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{youhui}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('attachid, hospital, doctor, title, desc, startTime, endTime, price, oldPrice, yuyue, comments', 'required'),
            array('attachid, hospital, doctor, startTime, endTime, yuyue, comments', 'length', 'max' => 10),
            array('title, desc, price, oldPrice', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, attachid, hospital, doctor, title, desc, startTime, endTime, price, oldPrice, yuyue, comments', 'safe', 'on' => 'search'),
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
            'attachid' => '封面图',
            'hospital' => '所属医院',
            'doctor' => '操刀医生',
            'title' => '优惠标题',
            'desc' => '简介',
            'startTime' => '开始时间',
            'endTime' => '结束时间',
            'price' => '现价',
            'oldPrice' => '原价',
            'yuyue' => '预约人数',
            'comments' => '评论人数',
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
        $criteria->compare('attachid', $this->attachid, true);
        $criteria->compare('hospital', $this->hospital, true);
        $criteria->compare('doctor', $this->doctor, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('desc', $this->desc, true);
        $criteria->compare('startTime', $this->startTime, true);
        $criteria->compare('endTime', $this->endTime, true);
        $criteria->compare('price', $this->price, true);
        $criteria->compare('oldPrice', $this->oldPrice, true);
        $criteria->compare('yuyue', $this->yuyue, true);
        $criteria->compare('comments', $this->comments, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Youhui the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
