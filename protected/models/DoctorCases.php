<?php

/**
 * This is the model class for table "{{doctor_cases}}".
 *
 * The followings are the available columns in table '{{doctor_cases}}':
 * @property string $id
 * @property string $uid
 * @property string $title
 * @property string $desc
 * @property string $content
 * @property string $about_buyer
 * @property string $xiangmu
 * @property string $buy_time
 * @property string $comments
 * @property string $favors
 * @property string $cTime
 */
class DoctorCases extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{doctor_cases}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('uid, title, desc, content, about_buyer, xiangmu, buy_time, comments, favors, cTime', 'required'),
            array('uid, xiangmu, buy_time, comments, favors, cTime', 'length', 'max' => 10),
            array('title, desc, content, about_buyer', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, uid, title, desc, content, about_buyer, xiangmu, buy_time, comments, favors, cTime', 'safe', 'on' => 'search'),
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
            'title' => '标题',
            'desc' => '简短描述',
            'content' => '案例内容',
            'about_buyer' => '关于买家',
            'xiangmu' => '所属项目',
            'buy_time' => '项目时间',
            'comments' => '评论数',
            'favors' => '赞的数量',
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
        $criteria->compare('desc', $this->desc, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('about_buyer', $this->about_buyer, true);
        $criteria->compare('xiangmu', $this->xiangmu, true);
        $criteria->compare('buy_time', $this->buy_time, true);
        $criteria->compare('comments', $this->comments, true);
        $criteria->compare('favors', $this->favors, true);
        $criteria->compare('cTime', $this->cTime, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return DoctorCases the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
