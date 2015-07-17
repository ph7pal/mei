<?php

/**
 * This is the model class for table "{{posts}}".
 *
 * The followings are the available columns in table '{{posts}}':
 * @property string $id
 * @property integer $colid
 * @property string $uid
 * @property string $author
 * @property string $title
 * @property string $second_title
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keywords
 * @property string $intro
 * @property string $content
 * @property string $copy_from
 * @property string $copy_url
 * @property string $hits
 * @property string $order
 * @property integer $reply_allow
 * @property integer $status
 * @property string $last_update_time
 * @property string $cTime
 * @property string $attachid
 * @property integer $top
 * @property string $comments
 * @property string $favors
 */
class Posts extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{posts}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('colid, uid, author, title, second_title, seo_title, seo_description, seo_keywords, intro, content, copy_from, copy_url, order, status, last_update_time, cTime, attachid, top, comments, favors', 'required'),
            array('colid, reply_allow, status, top', 'numerical', 'integerOnly' => true),
            array('uid, hits, order, last_update_time, cTime, comments, favors', 'length', 'max' => 10),
            array('author, copy_from, attachid', 'length', 'max' => 100),
            array('title, second_title, seo_title, seo_description, seo_keywords, intro, copy_url', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, colid, uid, author, title, second_title, seo_title, seo_description, seo_keywords, intro, content, copy_from, copy_url, hits, order, reply_allow, status, last_update_time, cTime, attachid, top, comments, favors', 'safe', 'on' => 'search'),
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
            'colid' => '所属栏目',
            'uid' => '创建者',
            'author' => '作者',
            'title' => '文章标题',
            'second_title' => '文章副标题',
            'seo_title' => 'SEO标题',
            'seo_description' => 'SEO描述',
            'seo_keywords' => 'SEO关键词',
            'intro' => '简介',
            'content' => '正文',
            'copy_from' => '来源',
            'copy_url' => '来源地址',
            'hits' => '点击次数',
            'order' => '排序',
            'reply_allow' => '是否允许评论',
            'status' => 'Status',
            'last_update_time' => '最近更新',
            'cTime' => '创建时间',
            'attachid' => '封面图',
            'top' => '置顶',
            'comments' => '评论数',
            'favors' => '点赞',
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
        $criteria->compare('colid', $this->colid);
        $criteria->compare('uid', $this->uid, true);
        $criteria->compare('author', $this->author, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('second_title', $this->second_title, true);
        $criteria->compare('seo_title', $this->seo_title, true);
        $criteria->compare('seo_description', $this->seo_description, true);
        $criteria->compare('seo_keywords', $this->seo_keywords, true);
        $criteria->compare('intro', $this->intro, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('copy_from', $this->copy_from, true);
        $criteria->compare('copy_url', $this->copy_url, true);
        $criteria->compare('hits', $this->hits, true);
        $criteria->compare('order', $this->order, true);
        $criteria->compare('reply_allow', $this->reply_allow);
        $criteria->compare('status', $this->status);
        $criteria->compare('last_update_time', $this->last_update_time, true);
        $criteria->compare('cTime', $this->cTime, true);
        $criteria->compare('attachid', $this->attachid, true);
        $criteria->compare('top', $this->top);
        $criteria->compare('comments', $this->comments, true);
        $criteria->compare('favors', $this->favors, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Posts the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
