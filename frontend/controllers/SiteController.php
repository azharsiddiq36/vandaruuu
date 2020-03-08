<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Kamar;
use common\models\Tipe;
use yii\db\Expression;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {

        $kamar = Kamar::find()->limit(4)->orderBy(new Expression('rand()'))->all();
        return $this->render('index',['kamar'=>$kamar]);
    }
    public function actionDetail($nomor){
        $kamar = Kamar::findOne([
            'kamar_id' => $nomor,]);
        return $this->render('detail',['kamar'=>$kamar]);
    }
    public function actionKebijakan(){
        return $this->render('kebijakan');

    }
}
