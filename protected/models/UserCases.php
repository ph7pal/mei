<?php

/**
 * This is the model class for table "{{user_cases}}".
 *
 * The followings are the available columns in table '{{user_cases}}':
 * @property string $id
 * @property string $uid
 * @property string $hospital
 * @property string $doctor
 * @property string $xiangmu
 * @property string $title
 * @property string $content
 * @property string $score_fuwu
 * @property string $score_hj
 * @property string $score_xg
 * @property string $buy_time
 * @property string $cost
 * @property string $comments
 * @property string $favors
 * @property integer $status
 * @property string $cTime
 */
class UserCases extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{user_cases}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('uid, hospital, doctor, xiangmu, title, content, score_fuwu, score_hj, score_xg, buy_time, cost, comments, favors, status, cTime', 'required'),
            array('status', 'numerical', 'integerOnly' => true),
            array('uid, hospital, doctor, xiangmu, score_fuwu, score_hj, score_xg, buy_time, comments, favors, cTime', 'length', 'max' => 10),
            array('title, content', 'length', 'max' => 255),
            array('cost', 'length', 'max' => 16),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, uid, hospital, doctor, xiangmu, title, content, score_fuwu, score_hj, score_xg, buy_time, cost, comments, favors, status, cTime', 'safe', 'on' => 'search'),
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
            'uid' => '作者',
            'hospital' => '所属医院',
            'doctor' => '操刀医生',
            'xiangmu' => '项目',
            'title' => '整形日记标题',
            'content' => '日记内容',
            'score_fuwu' => '医院服务',
            'score_hj' => '就医环境',
            'score_xg' => '术后效果',
            'buy_time' => '整形时间',
            'cost' => '花费',
            'comments' => '评论数',
            'favors' => '点赞',
            'status' => 'Status',
            'cTime' => '发表时间',
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
        $criteria->compare('hospital', $this->hospital, true);
        $criteria->compare('doctor', $this->doctor, true);
        $criteria->compare('xiangmu', $this->xiangmu, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('score_fuwu', $this->score_fuwu, true);
        $criteria->compare('score_hj', $this->score_hj, true);
        $criteria->compare('score_xg', $this->score_xg, true);
        $criteria->compare('buy_time', $this->buy_time, true);
        $criteria->compare('cost', $this->cost, true);
        $criteria->compare('comments', $this->comments, true);
        $criteria->compare('favors', $this->favors, true);
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
     * @return UserCases the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
