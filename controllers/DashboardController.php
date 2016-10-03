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

        $this->allowUser(3);
        return $this->render('index', [

        ]);
    }
    public function actionCreate(){
        $this->allowUser(3);
        if(Yii::$app->request->post())
        {
            $data = Yii::$app->request->post();
            date_default_timezone_set('Asia/Calcutta');
            $currentDate =  date("Y-m-d h:i:s");
            $userFind= User::findOne(['username'=>$data['userName']]);
            if($userFind)
            {
                \Yii::$app->getSession()->setFlash('warning', 'UserName Already Exists.. Please Change UserName.');
            } else {
                $user = new User();
                $user->username = $data['userName'];
                $user->firstname = $data['firstName'];
                $user->lastname = $data['lastName'];
                $user->email = $data['email'];
                $user->roll_id = $data['roll_id'];
                $user->mobile = $data['mobile'];
                $user->setPassword($data['password']);
                $user->generateAuthKey();
                if ($user->save())
                    \Yii::$app->getSession()->setFlash('success', 'Employee SuccessFully Created');
                    else
                        \Yii::$app->getSession()->setFlash('unsuccess', 'Error Occured while Creating New User');

            }


        }
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