<?php

namespace app\models;

use Yii;
use app\models\WeikeTask;
use app\models\WeikeTaskWork;
use app\models\WeikeTaskComment;
/**
 * This is the model class for table "weike_user".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_password
 * @property string $email
 */
class WeikeUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
 
    public function getWeikeTaskWork()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasMany(WeikeTaskWork::className(), ['user_id' => 'user_id']);
    }
    public function getWeikeTask()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasMany(WeikeTask::className(), ['u_id' => 'user_id']);
    }
    public function getWeikeTaskComment()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasMany(WeikeTaskComment::className(), ['user_id' => 'user_id']);
    }
    /**
     * @inheritdoc
     */
    public static function tableName() 
    { 
        return 'weike_user'; 
    } 

    /** 
     * @inheritdoc 
     */ 
    public function rules() 
    { 
        return [
            [['user_name', 'email'], 'string', 'max' => 20],
            [['user_password'], 'string', 'max' => 32]
        ]; 
    } 

    /** 
     * @inheritdoc 
     */ 
    public function attributeLabels() 
    { 
        return [ 
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_password' => 'User Password',
            'email' => 'Email',
        ]; 
    } 
}
