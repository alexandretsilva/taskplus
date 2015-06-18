<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rotina */

$this->title = $model->IdRotina;
$this->params['breadcrumbs'][] = ['label' => 'Rotinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rotina-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdRotina], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdRotina], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdRotina',
            'NomeRtn',
            'DescricaoRtn',
            'FrequenciaRtn',
            'DuracaoRtn',
            'GrupoRtn',
            'AnexoRtn',
            'ResponsavelRtn',
            'CreatorRtn',
            'CreateDateRtn',
            'LastUpdateRtn',
        ],
    ]) ?>

</div>
