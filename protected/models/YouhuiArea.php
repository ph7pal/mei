<?php

/**
 * This is the model class for table "{{youhui_area}}".
 *
 * The followings are the available columns in table '{{youhui_area}}':
 * @property string $id
 * @property string $youhuiId
 * @property string $areaid
 */
class YouhuiArea extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{youhui_area}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('youhuiId, areaid', 'required'),
            array('youhuiId, areaid', 'length', 'max' => 10),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, youhuiId, areaid', 'safe', 'on' => 'search'),
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
            'youhuiId' => '所属优惠',
            'areaid' => '地区',
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
        $criteria->compare('youhuiId', $this->youhuiId, true);
        $criteria->compare('areaid', $this->areaid, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return YouhuiArea the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
