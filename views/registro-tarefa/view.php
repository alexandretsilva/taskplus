<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RegistroTarefa */

$this->title = $model->Id_TarefaFk;
$this->params['breadcrumbs'][] = ['label' => 'Registro Tarefas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registro-tarefa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_TarefaFk' => $model->Id_TarefaFk, 'Id_UserFk' => $model->Id_UserFk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_TarefaFk' => $model->Id_TarefaFk, 'Id_UserFk' => $model->Id_UserFk], [
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
            'Id_TarefaFk',
            'Id_UserFk',
            'Comment',
            'Lembrete',
            'StartDate',
            'EndDate',
            'Creator',
            'CreateDate',
            'Modifydate',
        ],
    ]) ?>

</div>
