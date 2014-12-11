<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "weike_gaojian".
 *
 * @property integer $g_id
 * @property string $gaojian_title
 * @property string $gaojian_file
 * @property integer $task_id
 * @property integer $user_id
 * @property integer $gaojian_state
 * @property integer $time
 */
class WeikeGaojian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'weike_gaojian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_id', 'user_id', 'gaojian_state', 'time'], 'integer'],
            [['gaojian_title', 'gaojian_file'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'g_id' => 'G ID',
            'gaojian_title' => 'Gaojian Title',
            'gaojian_file' => 'Gaojian File',
            'task_id' => 'Task ID',
            'user_id' => 'User ID',
            'gaojian_state' => 'Gaojian State',
            'time' => 'Time',
        ];
    }
}
