<?php

/**
 * This is the model class for table "{{medals}}".
 *
 * The followings are the available columns in table '{{medals}}':
 * @property string $id
 * @property string $title
 * @property string $imgurl
 * @property integer $classify
 * @property string $cTime
 */
class Medals extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{medals}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, imgurl, classify, cTime', 'required'),
            array('classify', 'numerical', 'integerOnly' => true),
            array('title, imgurl', 'length', 'max' => 255),
            array('cTime', 'length', 'max' => 10),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title, imgurl, classify, cTime', 'safe', 'on' => 'search'),
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
            'title' => '奖章名称',
            'imgurl' => '图标地址',
            'classify' => '奖章分类',
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
        $criteria->compare('title', $this->title, true);
        $criteria->compare('imgurl', $this->imgurl, true);
        $criteria->compare('classify', $this->classify);
        $criteria->compare('cTime', $this->cTime, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Medals the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
