<?php

/**
 * This is the model class for table "{{doctor_paper}}".
 *
 * The followings are the available columns in table '{{doctor_paper}}':
 * @property string $id
 * @property string $uid
 * @property string $title
 * @property string $pub_time
 * @property string $pub_area
 * @property string $url
 * @property string $cTime
 */
class DoctorPaper extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{doctor_paper}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('uid, title, pub_time, pub_area, url, cTime', 'required'),
            array('uid, pub_time, cTime', 'length', 'max' => 10),
            array('title, pub_area, url', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, uid, title, pub_time, pub_area, url, cTime', 'safe', 'on' => 'search'),
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
            'uid' => '所属医生',
            'title' => '论文标题',
            'pub_time' => '发布时间',
            'pub_area' => '发表地方',
            'url' => '链接地址',
            'cTime' => 'C Time',
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
        $criteria->compare('title', $this->title, true);
        $criteria->compare('pub_time', $this->pub_time, true);
        $criteria->compare('pub_area', $this->pub_area, true);
        $criteria->compare('url', $this->url, true);
        $criteria->compare('cTime', $this->cTime, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return DoctorPaper the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
