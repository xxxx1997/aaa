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

/**
 * Site controller
 */
class TaskController extends Controller
{
	//任务大厅
	public function actionTask_list(){
		return $this->render("task_list");
	}
	//发布任务
	public function actionRelease(){
		//单人悬赏
		return $this->render("release");
	}
	public function actionCount(){
		//计件悬赏
		return $this->render("count");
	}
	public function actionDouble(){
		//多人悬赏
		return $this->render("double");
	}
	public function actionTender(){
		//普通招标
		return $this->render("tender");
	}
	public function actionDeposit(){
		//订金悬赏
		return $this->render("deposit");
	}




	public function actionIndustry(){
		return $this->render("industry");
	}
	public function actionPay(){
		return $this->render("pay");
	}
}
?>
