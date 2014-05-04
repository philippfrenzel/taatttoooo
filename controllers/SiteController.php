<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use frenzelgmbh\appcommon\controllers\AppController;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use yii\web\Session;

class SiteController extends AppController
{
    /**
     * setting the main layout
     * @var string $layout which will be used as the default main layout
     */
    public $layout = "/main";

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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

    public function actionIndex($id=NULL)
    {
        $dmsysmodel = new \app\models\Dmsys;
        $dmsysmodel->uId = \Yii::$app->session->id;
        $dmsysmodel->dms_module = \app\models\Dmsys::MODULE_STORY;
        if(is_null($id))
        {
            //check if user already has a running session
            if(\app\models\Story::find()->where(['uId'=>\Yii::$app->session->id])->count() > 0)
            {
                $model = \app\models\Story::find()->where(['uId'=>\Yii::$app->session->id])->one();
            }
            else
            {
                $model = new \app\models\Story;
                $model->uId = \Yii::$app->session->id;
                $model->save();
            }            
        }
        else
        {
            $model = \app\models\Story::findOne($id);
        }        
        $dmsysmodel->dms_id = $model->id;
        
        $this->layout = "/onepage";
        return $this->render('index',[
            'model' => $model,
            'dmsysmodel' => $dmsysmodel,
        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
