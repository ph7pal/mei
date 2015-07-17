<?php

/**
 * This is the model class for table "{{attachments}}".
 *
 * The followings are the available columns in table '{{attachments}}':
 * @property string $id
 * @property string $uid
 * @property string $logid
 * @property string $filePath
 * @property string $fileDesc
 * @property string $fileSize
 * @property integer $width
 * @property integer $height
 * @property string $classify
 * @property integer $covered
 * @property string $hits
 * @property string $cTime
 * @property integer $status
 */
class Attachments extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{attachments}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('uid, logid, filePath, fileDesc, fileSize, width, height, classify, covered, hits, cTime, status', 'required'),
            array('width, height, covered, status', 'numerical', 'integerOnly' => true),
            array('uid, logid, hits, cTime', 'length', 'max' => 11),
            array('filePath, fileDesc, classify', 'length', 'max' => 255),
            array('fileSize', 'length', 'max' => 32),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, uid, logid, filePath, fileDesc, fileSize, width, height, classify, covered, hits, cTime, status', 'safe', 'on' => 'search'),
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
            'uid' => 'Uid',
            'logid' => '所属对象',
            'filePath' => '图片路径',
            'fileDesc' => '图片描述',
            'fileSize' => '图片大小',
            'width' => '宽度',
            'height' => '高度',
            'classify' => '分类',
            'covered' => '是否封面',
            'hits' => 'Hits',
            'cTime' => '创建时间',
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
        $criteria->compare('logid', $this->logid, true);
        $criteria->compare('filePath', $this->filePath, true);
        $criteria->compare('fileDesc', $this->fileDesc, true);
        $criteria->compare('fileSize', $this->fileSize, true);
        $criteria->compare('width', $this->width);
        $criteria->compare('height', $this->height);
        $criteria->compare('classify', $this->classify, true);
        $criteria->compare('covered', $this->covered);
        $criteria->compare('hits', $this->hits, true);
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
     * @return Attachments the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
