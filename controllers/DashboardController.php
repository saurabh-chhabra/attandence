<?php
/**
 * Created by PhpStorm.
 * User: akhilesh
 * Date: 3/10/16
 * Time: 12:14 PM
 */
namespace app\controllers;
use app\models\User;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii;

class DashboardController extends AppController
{
    /**
     * @inheritdoc
     */
    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'dashboard'],
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'dashboard'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),

            ],
        ];
    }

    public function actionIndex()
    {
        if (\Yii::$app->user->isGuest) {
            return $this->redirect(['site/index']);
        }else {
            $this->allowUser(2);
            return $this->render('index', [

            ]);
        }
    }

}