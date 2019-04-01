<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Properties;
use app\models\Units;
use app\models\Tenants;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex(){   

        $properties = Properties::find()->all(); // fetch all the properties from the database
        if ($properties === null) {
            throw new NotFoundHttpException;
        }
        return $this->render('home', ['properties' => $properties]); // feed the properties list into the home page
    
    }


    public function actionCreate(){

        $property = new Properties();
        if ($property === null) {
            throw new NotFoundHttpException;
        }

        $formData = Yii::$app->request->post();
        if($property->load($formData)){
            if($property->save()){
                Yii::$app->getSession()->setFlash('message', 'Property has been added successfully');
                return $this->redirect(['index']);
                // return $this->render('home');
            }
            else{
                Yii::$app->getSession()->setFlash('message', 'Failed to add property');
            }

        }
        return $this->render('create', ['property' => $property]);
    }


    public function actionView($id){

        $property = Properties::findOne($id);

        return $this->render('view', ['property'=>$property]);
    }

    public function actionUpdate($id){

        $property = Properties::findOne($id);

        if($property->load(Yii::$app->request->post()) && $property->save() ){
            
            Yii::$app->getSession()->setFlash('message', 'Property has been update successfully');
            return $this->redirect(['index', 'id' => $property->id]);
        }            
        else {
            Yii::$app->getSession()->setFlash('message', 'Failed to update property');
        }
        return $this->render('update', ['property'=>$property]);
    }

    public function actionDelete($id){
        $property = Properties::findOne($id)->delete();
        if($property){
            Yii::$app->getSession()->setFlash('message', 'Property has been deleted successfully');
            return $this->redirect(['index']);
        }
    }

    public function actionUnits(){

        $units = Units::find()->all();
        
        $projected_revenue = 0;
        foreach ($units as $unit) {
            $projected_revenue+=$unit->monthly_rent;
        }
        
        return $this->render('units', ['units' => $units, 'projected_revenue' => $projected_revenue]); 

    }



    public function actionUnit(){

        $unit = new Units();
        $formData = Yii::$app->request->post();
        if($unit ->load($formData)){
            if($unit->save()){
                Yii::$app->getSession()->setFlash('message', 'Unit has been added successfully');
                return $this->redirect(['units']);
            }
            else{
                Yii::$app->getSession()->setFlash('message', 'Failed to add Unit');
            }

        }
        return $this->render('createunit', ['unit' => $unit]);
    }


// the unit actions

    public function actionUnitics($id){

        $unit = Units::findOne($id);

        return $this->render('viewunit', ['unit'=>$unit]);
    }


    public function actionRemove($id){
        $unit = Units::findOne($id)->delete();
        if($unit){
            Yii::$app->getSession()->setFlash('message', 'Unit has been deleted successfully');
            return $this->redirect(['units']);
        }
    }


    public function actionUpdateunit($id){

        $unit = Units::findOne($id);

        if($unit->load(Yii::$app->request->post()) && $unit->save() ){
            
            Yii::$app->getSession()->setFlash('message', 'Property has been update successfully');
            return $this->redirect(['index', 'id' => $unit->id]);
        }            
        else {
            Yii::$app->getSession()->setFlash('message', 'Failed to update property');
        }
        return $this->render('updateunit', ['unit'=>$unit]);
    }



    public function actionTenants(){   

        $tenants = Tenants::find()->all();

        return $this->render('tenants', ['tenants'=>$tenants]); // feed the properties list into the home page
    
    }

    public function actionTenant(){

        $tenant = new Tenants();
        $formData = Yii::$app->request->post();
        if($tenant ->load($formData)){
            if($tenant->save()){
                Yii::$app->getSession()->setFlash('message', 'Tenant has been added successfully');
                return $this->redirect(['tenants']);
            }
            else{
                Yii::$app->getSession()->setFlash('message', 'Failed to add Unit');
            }

        }
        return $this->render('addtenant', ['tenant' => $tenant]);
    }
























    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
