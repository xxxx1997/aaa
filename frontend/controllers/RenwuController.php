<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\WeikeTask;   
use app\models\WeikeIndus;
use app\models\WeikeUser;
/**
 * Renwu controller
 */
class RenwuController extends Controller{
    
    public function actionIndex(){
        
        $list['indus']=  WeikeIndus::find()->where('indus_pid=0')->all();
        
        $list['list']=WeikeTask::findBySql('select * from weike_task t ,xuqiu x where t.task_id=x.task_id and x.state=5')->all();
        // echo md5('admin');
        foreach($list['list'] as $k=>$v){
           // var_dump($v['task_id']);
                $a=\app\models\TaskClass::findOne($v['c_id']);
                $list['list'][$k]['c_id'] = $a['c_name'];
                // =$a['c_name'];
             
            
        }
        return $this->render('index',$list);
    }
    
}