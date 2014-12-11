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
use app\models\WeikeTaskComment;
/**
 * Renwu controller
 */

class ListController extends Controller{
    public $enableCsrfValidation = false;
    public function actionList(){
      //  echo $_GET['id'];
       $list['list']=  \app\models\Xuqiu::findBySql("select * from xuqiu where task_id=".$_GET['id'])->one();
       $list['task']=  \app\models\WeikeTask::findBySql("select * from weike_task where task_id=".$_GET['id'])->one();
        
        if(isset($_GET['view'])&&$_GET['view']=='work'){
            $list['work']=  \app\models\WeikeTaskWork::findBySql('select * from weike_task_work w,weike_user u where w.user_id=u.user_id and w.task_id='.$_GET['id'])->all();
          
            //var_dump($list['work']);die; 
            return $this->render('work',$list);
            
        }
        if(isset($_GET['view'])&&$_GET['view']=='comment'){
             $list['comment']= \app\models\WeikeTaskComment::findBySql('select * from weike_task_comment c,weike_user u where c.user_id=u.user_id and c.task_id='.$_GET['id'])->all();
             $list['count']=count($list['comment']);
             return $this->render('comment',$list);
        }
       
        //var_dump($list['list']);die;
        //var_dump($list['list']);die;
        return $this->render('list',$list);
    }
    public function actionComment_add(){
 
        $comment= \app\models\WeikeTaskComment::findBySql("select * from weike_task_comment  where content='".$_POST['content']."'")->one();
        //
        if($comment){
            echo 2;
        }else{
            $comment=new WeikeTaskComment;//print_r($comment);die;
            //print_r($_POST);
            //DIE;
            $comment->content=$_POST['content'];
            $comment->time=time();
            $comment->user_id=$_POST['user_id'];
            $comment->task_id=$_POST['task_id'];
            if($comment->insert()){
                 $list= \app\models\WeikeTaskComment::findBySql('select * from weike_task_comment c,weike_user u where c.user_id=u.user_id and c.task_id='.$_POST['task_id'])->all();
                $data='';
                foreach($list as $k=>$v){
                    $data[$k]['content']=$v['content'];
                    $data[$k]['time']=date('Y-m-d H:i:s',$v['time']);
                    $data[$k]['user_name']=$v['weikeUser']['user_name'];
                }
                
                echo json_encode($data);
            }
        }
    }
    public function actionWork_add(){
//       / var_dump($_POST);die;
        $model=new \app\models\WeikeTaskWork();
        $model->work_title=$_POST['tar_content'];
        $model->user_id=$_POST['user_id'];
        $model->task_id=$_POST['task_id'];
        $model->time=time();
        if($model->insert()){
            $this->redirect(["list/list",'view'=>'work','id'=>$_POST['task_id']]);
           // header("location:http://location/keke/frontend/web/index.php?r=list/list&view=work&id=".$_POST['task_id']."");
           // echo "<script>location='http://location/keke/frontend/web/index.php?r=list/list&view=work&id='".$_POST['task_id']."'</script>";    
       }
    }
}