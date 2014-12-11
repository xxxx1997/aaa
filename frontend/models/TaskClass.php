<?php

namespace app\models;

use app\models\WeikeTask;
use Yii;

/**
 * This is the model class for table "task_class".
 *
 * @property integer $c_id
 * @property string $c_name
 */
class TaskClass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
public function getWeiketask()
{
    // Customer has_many Order via Order.customer_id -> id
    return $this->hasOne(weiketask::className(), ['c_id' => 'c_id']);
}
    public static function tableName()
    {
        return 'task_class';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_id' => 'C ID',
            'c_name' => 'C Name',
        ];
    }
}
