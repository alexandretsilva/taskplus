<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tarefa */

$this->title = 'Update Tarefa: ' . ' ' . $model->IdTarefa;
$this->params['breadcrumbs'][] = ['label' => 'Tarefas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTarefa, 'url' => ['view', 'IdTarefa' => $model->IdTarefa, 'Id_Rotina' => $model->Id_Rotina]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tarefa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
