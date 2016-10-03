<?php
/**
 * Created by PhpStorm.
 * User: akhilesh
 * Date: 3/10/16
 * Time: 12:14 PM
 */
namespace app\controllers;
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

        $this->allowUser(3);
        return $this->render('index', [

        ]);
    }
    public function actionCreate(){
        return $this->render('create',[

        ]);
    }
    public function actionManage(){
        return $this->render('manage',[

        ]);
    }
    public function actionView(){
        return $this->render('view',[

        ]);

    }
    public function actionMonthlyCalculation()
    {
        return $this->render('monthlycalc',[

        ]);
    }
    public function actionReports(){
        return $this->render('reports',[

        ]);
    }
    public function actionSalaryDetails(){
        return $this->render('salarydetails',[

        ]);
    }
    public function actionAttandenceDetails(){
        return $this->render('attandencedetails',[

        ]);
    }

}