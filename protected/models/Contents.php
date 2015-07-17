<?php

/**
 * This is the model class for table "{{contents}}".
 *
 * The followings are the available columns in table '{{contents}}':
 * @property string $id
 * @property string $logid
 * @property string $content
 * @property string $classify
 */
class Contents extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{contents}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('logid, content, classify', 'required'),
            array('logid, classify', 'length', 'max' => 10),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, logid, content, classify', 'safe', 'on' => 'search'),
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
            'logid' => '所属对象',
            'content' => '内容',
            'classify' => '类型：服务详情、承诺服务、医生案例等',
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
        $criteria->compare('logid', $this->logid, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('classify', $this->classify, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Contents the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
