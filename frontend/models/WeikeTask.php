<?php

namespace app\models;
use yii\base\Model;
use Yii;
use app\models\WeikeUser;
use app\models\Xuqiu;
use app\models\TaskClass;
use app\models\WeikeTaskWork;
/**
 * This is the model class for table "weike_task".
 *
 * @property integer $task_id
 * @property integer $c_id
 * @property integer $end_time
 * @property integer $count
 * @property integer $danjia
 * @property integer $y_count
 * @property integer $y_price
 * @property integer $e_count
 * @property integer $e_price
 * @property integer $s_count
 * @property integer $s_price
 */
class WeikeTask extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function getWeikeuser()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasOne(Weikeuser::className(), ['user_id' => 'u_id']);
    }
    public function getXuqiu()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasOne(xuqiu::className(), ['task_id' => 'task_id']);
    }
    public function getTaskClass()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasOne(TaskClass::className(), ['c_id' => 'c_id']);
    }
    public function getWeikeTaskWork()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasMany(WeikeTaskWork::className(), ['task_id' => 'task_id']);
    }
    public static function tableName() 
    { 
        return 'weike_task'; 
    } 

    /** 
     * @inheritdoc 
     */ 
    public function rules() 
    { 
        return [
            [['c_id', 'end_time', 'count', 'y_count', 'y_price', 'e_count', 'e_price', 's_count', 's_price', 'u_id'], 'integer'],
            [['danjia'], 'string', 'max' => 30],
            [['start_time'], 'string', 'max' => 20]
        ]; 
    } 

    /** 
     * @inheritdoc 
     */ 
    public function attributeLabels() 
    { 
        return [ 
            'task_id' => 'Task ID',
            'c_id' => 'C ID',
            'end_time' => 'End Time',
            'count' => 'Count',
            'danjia' => 'Danjia',
            'y_count' => 'Y Count',
            'y_price' => 'Y Price',
            'e_count' => 'E Count',
            'e_price' => 'E Price',
            's_count' => 'S Count',
            's_price' => 'S Price',
            'u_id' => 'U ID',
            'start_time' => 'Start Time',
        ]; 
    } 

}
