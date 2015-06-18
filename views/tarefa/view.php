<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tarefa */

$this->title = $model->IdTarefa;
$this->params['breadcrumbs'][] = ['label' => 'Tarefas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarefa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdTarefa' => $model->IdTarefa, 'Id_Rotina' => $model->Id_Rotina], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdTarefa' => $model->IdTarefa, 'Id_Rotina' => $model->Id_Rotina], [
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
            'IdTarefa',
            'NomeTrf',
            'DescTrf:ntext',
            'StatusTrf',
            'PrioridadeTrf',
            'ProgressoTrf',
            'AnexoTrf',
            'DuracaoTfr',
            'Id_Rotina',
        ],
    ]) ?>

</div>
