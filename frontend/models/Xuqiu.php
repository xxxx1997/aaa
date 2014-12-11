<?php

namespace app\models;
use app\models\WeikeTask;
use Yii;

/**
 * This is the model class for table "xuqiu".
 *
 * @property integer $xuqiu_id
 * @property integer $hangye_id
 * @property integer $task_id
 * @property string $title
 * @property string $desc
 * @property string $file
 * @property integer $phone
 * @property integer $state
 */
class Xuqiu extends \yii\db\ActiveRecord
{
      public function getWeikeTask()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasOne(WeikeTask::className(), ['task_id' => 'task_id']);
    }  /**
     * @inheritdoc
     */
    
    public static function tableName() 
    { 
        return 'xuqiu'; 
    } 

    /** 
     * @inheritdoc 
     */ 
    public function rules() 
    { 
        return [
            [['hangye_id', 'task_id', 'phone', 'state'], 'integer'],
            [['desc'], 'string'],
            [['title'], 'string', 'max' => 20],
            [['thumb'], 'string', 'max' => 255]
        ]; 
    } 

    /** 
     * @inheritdoc 
     */ 
    public function attributeLabels() 
    { 
        return [ 
            'xuqiu_id' => 'Xuqiu ID',
            'hangye_id' => 'Hangye ID',
            'task_id' => 'Task ID',
            'title' => 'Title',
            'desc' => 'Desc',
            'thumb' => 'Thumb',
            'phone' => 'Phone',
            'state' => 'State',
        ]; 
    } 
}
