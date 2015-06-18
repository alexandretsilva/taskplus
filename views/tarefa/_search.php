<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TarefaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarefa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdTarefa') ?>

    <?= $form->field($model, 'NomeTrf') ?>

    <?= $form->field($model, 'DescTrf') ?>

    <?= $form->field($model, 'StatusTrf') ?>

    <?= $form->field($model, 'PrioridadeTrf') ?>

    <?php // echo $form->field($model, 'ProgressoTrf') ?>

    <?php // echo $form->field($model, 'AnexoTrf') ?>

    <?php // echo $form->field($model, 'DuracaoTfr') ?>

    <?php // echo $form->field($model, 'Id_Rotina') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
