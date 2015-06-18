<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TarefaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rotina';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rotina-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rotina', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'IdRotina',
            'NomeRtn',
            'DescricaoRtn',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

