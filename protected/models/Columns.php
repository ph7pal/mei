<?php

/**
 * This is the model class for table "{{columns}}".
 *
 * The followings are the available columns in table '{{columns}}':
 * @property string $id
 * @property string $belongid
 * @property string $title
 * @property string $pinyin
 * @property string $classify
 * @property string $position
 * @property string $url
 * @property string $attachid
 * @property string $order
 * @property string $hits
 * @property integer $status
 * @property string $cTime
 * @property integer $system
 * @property string $post_fields
 */
class Columns extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{columns}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('belongid, title, pinyin, classify, position, url, attachid, order, hits, status, cTime, system, post_fields', 'required'),
            array('status, system', 'numerical', 'integerOnly' => true),
            array('belongid, attachid, order, hits, cTime', 'length', 'max' => 10),
            array('title, pinyin', 'length', 'max' => 100),
            array('classify, position', 'length', 'max' => 32),
            array('url, post_fields', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, belongid, title, pinyin, classify, position, url, attachid, order, hits, status, cTime, system, post_fields', 'safe', 'on' => 'search'),
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
            'belongid' => '所属栏目',
            'title' => '标题',
            'pinyin' => '拼音',
            'classify' => '分类',
            'position' => '显示位置',
            'url' => '链接',
            'attachid' => '使用图标',
            'order' => '排序',
            'hits' => '点击',
            'status' => '状态',
            'cTime' => '创建时间',
            'system' => '是否系统项',
            'post_fields' => '显示栏目',
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
        $criteria->compare('belongid', $this->belongid, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('pinyin', $this->pinyin, true);
        $criteria->compare('classify', $this->classify, true);
        $criteria->compare('position', $this->position, true);
        $criteria->compare('url', $this->url, true);
        $criteria->compare('attachid', $this->attachid, true);
        $criteria->compare('order', $this->order, true);
        $criteria->compare('hits', $this->hits, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('cTime', $this->cTime, true);
        $criteria->compare('system', $this->system);
        $criteria->compare('post_fields', $this->post_fields, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Columns the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
