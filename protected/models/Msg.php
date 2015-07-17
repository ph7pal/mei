<?php

/**
 * This is the model class for table "{{msg}}".
 *
 * The followings are the available columns in table '{{msg}}':
 * @property string $id
 * @property string $uid
 * @property string $phone
 * @property string $code
 * @property string $content
 * @property integer $expiredTime
 * @property string $type
 * @property string $cTime
 * @property integer $status
 */
class Msg extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{msg}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('uid, phone, code, content, expiredTime, type, cTime, status', 'required'),
            array('expiredTime, status', 'numerical', 'integerOnly' => true),
            array('uid, phone', 'length', 'max' => 11),
            array('code', 'length', 'max' => 8),
            array('content', 'length', 'max' => 255),
            array('type, cTime', 'length', 'max' => 10),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, uid, phone, code, content, expiredTime, type, cTime, status', 'safe', 'on' => 'search'),
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
            'id' => '短信ID',
            'uid' => '用户ID',
            'phone' => '电话号码',
            'code' => '验证码',
            'content' => '短信内容',
            'expiredTime' => '过期时间',
            'type' => '业务类型',
            'cTime' => 'C Time',
            'status' => 'Status',
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
        $criteria->compare('uid', $this->uid, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('code', $this->code, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('expiredTime', $this->expiredTime);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('cTime', $this->cTime, true);
        $criteria->compare('status', $this->status);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Msg the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
