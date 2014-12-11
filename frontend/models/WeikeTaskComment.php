<?php

namespace app\models;

use Yii;
use app\models\WeikeUser;
/**
 * This is the model class for table "weike_task_comment".
 *
 * @property integer $com_id
 * @property integer $user_id
 * @property string $content
 * @property integer $time
 * @property integer $task_id
 */
class WeikeTaskComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    
    public function getWeikeUser()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasOne(WeikeUser::className(), ['user_id' => 'user_id']);
    }
    
     public static function tableName() 
    { 
        return 'weike_task_comment'; 
    } 

    /** 
     * @inheritdoc 
     */ 
    public function rules() 
    { 
        return [
            [['user_id', 'time', 'task_id'], 'integer'],
            [['content'], 'string', 'max' => 20]
        ]; 
    } 

    /** 
     * @inheritdoc 
     */ 
    public function attributeLabels() 
    { 
        return [ 
            'com_id' => 'Com ID',
            'user_id' => 'User ID',
            'content' => 'Content',
            'time' => 'Time',
            'task_id' => 'Task ID',
        ]; 
    } 
}
