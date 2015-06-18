<?php

namespace app\controllers;

use Yii;
use app\models\RegistroTarefa;
use app\models\RegistroTarefaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RegistroTarefaController implements the CRUD actions for RegistroTarefa model.
 */
class RegistroTarefaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all RegistroTarefa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RegistroTarefaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RegistroTarefa model.
     * @param integer $Id_TarefaFk
     * @param integer $Id_UserFk
     * @return mixed
     */
    public function actionView($Id_TarefaFk, $Id_UserFk)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_TarefaFk, $Id_UserFk),
        ]);
    }

    /**
     * Creates a new RegistroTarefa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RegistroTarefa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_TarefaFk' => $model->Id_TarefaFk, 'Id_UserFk' => $model->Id_UserFk]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing RegistroTarefa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Id_TarefaFk
     * @param integer $Id_UserFk
     * @return mixed
     */
    public function actionUpdate($Id_TarefaFk, $Id_UserFk)
    {
        $model = $this->findModel($Id_TarefaFk, $Id_UserFk);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_TarefaFk' => $model->Id_TarefaFk, 'Id_UserFk' => $model->Id_UserFk]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing RegistroTarefa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Id_TarefaFk
     * @param integer $Id_UserFk
     * @return mixed
     */
    public function actionDelete($Id_TarefaFk, $Id_UserFk)
    {
        $this->findModel($Id_TarefaFk, $Id_UserFk)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RegistroTarefa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Id_TarefaFk
     * @param integer $Id_UserFk
     * @return RegistroTarefa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_TarefaFk, $Id_UserFk)
    {
        if (($model = RegistroTarefa::findOne(['Id_TarefaFk' => $Id_TarefaFk, 'Id_UserFk' => $Id_UserFk])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
