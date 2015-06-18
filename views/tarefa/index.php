<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TarefaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tarefas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarefa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tarefa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdTarefa',
            'NomeTrf',
            'DescTrf:ntext',
            'StatusTrf',
            'PrioridadeTrf',
            // 'ProgressoTrf',
            // 'AnexoTrf',
            // 'DuracaoTfr',
            // 'Id_Rotina',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
