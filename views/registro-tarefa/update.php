<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RegistroTarefa */

$this->title = 'Update Registro Tarefa: ' . ' ' . $model->Id_TarefaFk;
$this->params['breadcrumbs'][] = ['label' => 'Registro Tarefas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_TarefaFk, 'url' => ['view', 'Id_TarefaFk' => $model->Id_TarefaFk, 'Id_UserFk' => $model->Id_UserFk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="registro-tarefa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
