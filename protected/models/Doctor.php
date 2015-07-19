<?php

/**
 * This is the model class for table "{{doctor}}".
 *
 * The followings are the available columns in table '{{doctor}}':
 * @property string $uid
 * @property string $classify
 * @property integer $sex
 * @property string $localarea
 * @property string $practice_number
 * @property string $check_number
 * @property string $hospital
 * @property string $hospital_name
 * @property string $attachid
 * @property string $job_title
 * @property string $content
 * @property string $service_concept
 * @property string $education
 * @property string $idcard
 * @property string $posts
 * @property string $cases
 * @property string $thanks
 * @property string $order
 * @property string $yuyue
 * @property string $score
 * @property string $scorer
 * @property string $hits
 */
class Doctor extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{doctor}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('localarea, practice_number, check_number,hospital_name, attachid', 'required'),
            array('sex', 'numerical', 'integerOnly' => true),
            array('uid, classify, localarea, hospital, attachid, posts, cases, thanks, order, yuyue, score, scorer, hits', 'length', 'max' => 10),
            array('practice_number, check_number, idcard', 'length', 'max' => 32),
            array('hospital_name, job_title, content, service_concept, education', 'length', 'max' => 255),
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
            'uid' => '所属用户',
            'classify' => '分类：私密整形等',
            'sex' => '性别',
            'localarea' => '执业地',
            'practice_number' => '执业号',
            'check_number' => '核实电话',
            'hospital' => '所属医院',
            'hospital_name' => '医院名称',
            'attachid' => '头像',
            'job_title' => '职位',
            'content' => '个人描述',
            'service_concept' => '服务理念',
            'education' => '教育背景',
            'idcard' => '身份证',
            'posts' => '文章数',
            'cases' => '案例数',
            'thanks' => '被感谢数',
            'order' => '排名',
            'yuyue' => '预约量',
            'score' => '评分',
            'scorer' => '评价人数',
            'hits' => 'Hits',
        );
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Doctor the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
