<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Shift;
use frontend\models\ShiftSearch;
use yii\db\Exception;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\MethodNotAllowedHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShiftController implements the CRUD actions for Shift model.
 */
class ShiftController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Shift models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShiftSearch();
        $searchModel->assigned_to = Yii::$app->user->identity->id;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Accept invitation for a Shift model
     * @param $id
     * @return mixed
     * @throws Exception
     * @throws ForbiddenHttpException
     * @throws MethodNotAllowedHttpException
     * @throws NotFoundHttpException
     */
    public function actionAccept($id){
        $model = $this->findModel($id);
        if($model->assigned_to == Yii::$app->user->id){
            if($model->status === 0){
                $model->status = 1;
                if($model->save()){
                    return $this->actionIndex();
                }else{
                    throw new Exception('Can\'t save your answer');
                }
            }else{
                throw new MethodNotAllowedHttpException(Yii::t('frontend', 'This shift cannot be accepted anymore!'));
            }
        }else{
            throw new ForbiddenHttpException('It\'s not your shift dummy!');
        }
    }

    /**
     * Decline invitation for a Shift model
     * @param $id
     * @return mixed
     * @throws Exception
     * @throws ForbiddenHttpException
     * @throws MethodNotAllowedHttpException
     * @throws NotFoundHttpException
     */
    public function actionDecline($id){
        $model = $this->findModel($id);
        if($model->assigned_to == Yii::$app->user->id) {
            if ($model->stauts === 0) {
                $model->assigned_to = null;
                if ($model->save()) {
                    return $this->actionIndex();
                } else {
                    throw new Exception('Can\'t save your answer');
                }
            } else {
                throw new MethodNotAllowedHttpException(Yii::t('frontend', 'This shift cannot be declined anymore!'));
            }
        }else{
            throw new ForbiddenHttpException('It\'s not your shift dummy!');
        }
    }

    /**
     * Finds the Shift model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Shift the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Shift::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
