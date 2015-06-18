<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use models\RotinaSearch;


/* @var $this yii\web\View */
/* @var $searchModel app\models\RotinaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rotinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rotina-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'export'=>false,
        'bootstrap'=>'false',
        'responsive'=>true,
        'hover'=>true,
        'pjax'=>true,
    'pjaxSettings'=>[
        'neverTimeout'=>true,
       // 'beforeGrid'=>'My fancy content before.',
        //'afterGrid'=>'My fancy content after.',
        ],
        'resizableColumns'=>true,
        'resizeStorageKey'=>Yii::$app->user->id . '-' . date("m"),
            'floatHeader'=>true, // 'floatHeaderOptions'=>['scrollingTop'=>'3'],
         
            'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>Rotinas</h3>',
        'type'=>'success',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Create Rotina', ['create'], ['class' => 'btn btn-success']),
        'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Grid', ['index'], ['class' => 'btn btn-danger']),
        'footer'=>false
    ],
        
        
        
        'columns' => [
               
           // 'IdRotina',
            'NomeRtn',
            'DescricaoRtn',
            'FrequenciaRtn',
            'DuracaoRtn',
            'GrupoRtn',
            'AnexoRtn',
            'ResponsavelRtn',
            // 'CreatorRtn',
            // 'CreateDateRtn',
             'LastUpdateRtn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        
     
    ]); ?>

</div>
