<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property string $id
 * @property string $username
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property integer $classify
 * @property string $groupid
 * @property integer $last_login_ip
 * @property string $last_login_time
 * @property string $login_count
 * @property integer $status
 * @property string $cTime
 * @property integer $emailstatus
 * @property string $hash
 * @property string $areaid
 */
class Users extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{users}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, email, phone, password, classify, groupid, last_login_ip, last_login_time, login_count, status, cTime, emailstatus, hash, areaid', 'required'),
            array('classify, last_login_ip, status, emailstatus', 'numerical', 'integerOnly' => true),
            array('username', 'length', 'max' => 50),
            array('email', 'length', 'max' => 255),
            array('phone', 'length', 'max' => 16),
            array('password', 'length', 'max' => 32),
            array('groupid', 'length', 'max' => 5),
            array('last_login_time, login_count, cTime, areaid', 'length', 'max' => 10),
            array('hash', 'length', 'max' => 8),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, username, email, phone, password, classify, groupid, last_login_ip, last_login_time, login_count, status, cTime, emailstatus, hash, areaid', 'safe', 'on' => 'search'),
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
            'username' => '用户名',
            'email' => '邮箱',
            'phone' => '电话',
            'password' => '密码',
            'classify' => '类别：医生、医院、普通用户',
            'groupid' => '所属用户组',
            'last_login_ip' => '最近登录IP',
            'last_login_time' => '最近登录',
            'login_count' => '登录次数',
            'status' => '用户状态',
            'cTime' => '创建时间',
            'emailstatus' => '邮箱状态',
            'hash' => '密码混淆',
            'areaid' => '所在地区',
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
        $criteria->compare('username', $this->username, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('classify', $this->classify);
        $criteria->compare('groupid', $this->groupid, true);
        $criteria->compare('last_login_ip', $this->last_login_ip);
        $criteria->compare('last_login_time', $this->last_login_time, true);
        $criteria->compare('login_count', $this->login_count, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('cTime', $this->cTime, true);
        $criteria->compare('emailstatus', $this->emailstatus);
        $criteria->compare('hash', $this->hash, true);
        $criteria->compare('areaid', $this->areaid, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Users the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
