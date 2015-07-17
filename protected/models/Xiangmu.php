<?php

/**
 * This is the model class for table "{{xiangmu}}".
 *
 * The followings are the available columns in table '{{xiangmu}}':
 * @property string $id
 * @property string $belongid
 * @property string $title
 * @property string $title_en
 * @property string $pro_name
 * @property string $nickname
 * @property string $content
 * @property string $attachid
 * @property string $attachIcon
 * @property string $order
 * @property string $costs
 * @property string $score
 * @property string $scorer
 * @property string $youhui
 * @property integer $status
 * @property string $cTime
 */
class Xiangmu extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{xiangmu}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('belongid, title, title_en, pro_name, nickname, content, attachid, attachIcon, order, costs, score, scorer, youhui, status, cTime', 'required'),
            array('status', 'numerical', 'integerOnly' => true),
            array('belongid, attachid, order, scorer, youhui, cTime', 'length', 'max' => 10),
            array('title, title_en, pro_name, nickname, content', 'length', 'max' => 255),
            array('attachIcon, costs', 'length', 'max' => 16),
            array('score', 'length', 'max' => 6),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, belongid, title, title_en, pro_name, nickname, content, attachid, attachIcon, order, costs, score, scorer, youhui, status, cTime', 'safe', 'on' => 'search'),
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
            'belongid' => '所属项目',
            'title' => '项目名称',
            'title_en' => '项目英文',
            'pro_name' => '专业术语',
            'nickname' => '别名',
            'content' => '描述',
            'attachid' => '图标',
            'attachIcon' => '图标名称',
            'order' => '排序',
            'costs' => '花费',
            'score' => '平均评分',
            'scorer' => '点评数',
            'youhui' => '整形优惠数',
            'status' => '状态',
            'cTime' => '创建时间',
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
        $criteria->compare('title_en', $this->title_en, true);
        $criteria->compare('pro_name', $this->pro_name, true);
        $criteria->compare('nickname', $this->nickname, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('attachid', $this->attachid, true);
        $criteria->compare('attachIcon', $this->attachIcon, true);
        $criteria->compare('order', $this->order, true);
        $criteria->compare('costs', $this->costs, true);
        $criteria->compare('score', $this->score, true);
        $criteria->compare('scorer', $this->scorer, true);
        $criteria->compare('youhui', $this->youhui, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('cTime', $this->cTime, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Xiangmu the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
