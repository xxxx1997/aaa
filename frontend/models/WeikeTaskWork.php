<?php

namespace app\models;

use Yii;
use app\models\WeikeTask;
use app\models\WeikeUser;
/**
 * This is the model class for table "weike_task_work".
 *
 * @property integer $work_id
 * @property integer $task_id
 * @property integer $user_id
 * @property integer $work_state
 * @property string $work_title
 * @property string $work_img
 * @property string $work_file
 */
class WeikeTaskWork extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function getWeikeTask()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasOne(WeikeTask::className(), ['task_id' => 'task_id']);
    }    
    public function getWeikeUser()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasOne(WeikeUser::className(), ['user_id' => 'user_id']);
    }
    
  
    public static function tableName() 
    { 
        return 'weike_task_work'; 
    } 

    /** 
     * @inheritdoc 
     */ 
  


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
