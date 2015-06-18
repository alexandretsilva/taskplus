<?php

namespace app\controllers;

use Yii;
use app\models\Tarefa;
use app\models\TarefaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TarefaController implements the CRUD actions for Tarefa model.
 */
class TarefaController extends Controller
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
     * Lists all Tarefa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TarefaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tarefa model.
     * @param integer $IdTarefa
     * @param integer $Id_Rotina
     * @return mixed
     */
    public function actionView($IdTarefa, $Id_Rotina)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdTarefa, $Id_Rotina),
        ]);
    }

    /**
     * Creates a new Tarefa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tarefa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdTarefa' => $model->IdTarefa, 'Id_Rotina' => $model->Id_Rotina]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tarefa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $IdTarefa
     * @param integer $Id_Rotina
     * @return mixed
     */
    public function actionUpdate($IdTarefa, $Id_Rotina)
    {
        $model = $this->findModel($IdTarefa, $Id_Rotina);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdTarefa' => $model->IdTarefa, 'Id_Rotina' => $model->Id_Rotina]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tarefa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $IdTarefa
     * @param integer $Id_Rotina
     * @return mixed
     */
    public function actionDelete($IdTarefa, $Id_Rotina)
    {
        $this->findModel($IdTarefa, $Id_Rotina)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tarefa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $IdTarefa
     * @param integer $Id_Rotina
     * @return Tarefa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdTarefa, $Id_Rotina)
    {
        if (($model = Tarefa::findOne(['IdTarefa' => $IdTarefa, 'Id_Rotina' => $Id_Rotina])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
