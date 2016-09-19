<?php

namespace app\controllers;

define('GUEST', 0);
define('USER', 1);
define('EMPLOYEE', 2);
define('ADMIN', 3);


use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class AppController extends Controller
{

    public $userData; // Holds an activeRecord with current user. NULL if guest

    public $baseUrl = null;

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'login', 'request-password-reset'],
                'rules' => [
                    [
                        'actions' => ['login', 'request-password-reset'],
                        'allow' => true,
                        'rolls' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'rolls' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
            ],
        ];
    }

    public function init()
    {
        // Load the user
        if (!Yii::$app->user->isGuest) {
            $this->userData = Yii::$app->user->identity;
            $_SESSION['userData'] = $this->userData;
        }
        if (Yii::$app->request->BaseUrl == "/ivory/web") {
            $this->baseUrl = Yii::$app->request->BaseUrl;
        } else {
            $this->baseUrl = Yii::$app->request->BaseUrl . "/web";
        }

        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '1024M');

        Yii::$app->name = "ivory";
    }


    /*  @param $min_level */

    public function allowUser($min_level)
    {

        $current_level = -1;
        if ($this->userData !== null)
            $current_level = $this->userData->roll_id;
        else
            $current_level = 0;
        if ($min_level > $current_level) {
            $this->redirect(array("/pages/not-allowed"), true);
            }
    }

    /**
     * @param $roll_level
     */
    public function allowOnly($roll_level)
    {
        $current_level = -1;
        if ($this->userData !== null)
            $current_level = $this->userData->roll_id;
        if ($roll_level != $current_level) {
            $this->redirect(array("/pages/not-allowed"), true);
        }
    }
}
