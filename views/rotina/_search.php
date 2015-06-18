<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RotinaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rotina-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdRotina') ?>

    <?= $form->field($model, 'NomeRtn') ?>

    <?= $form->field($model, 'DescricaoRtn') ?>

    <?= $form->field($model, 'FrequenciaRtn') ?>

    <?= $form->field($model, 'DuracaoRtn') ?>

    <?php // echo $form->field($model, 'GrupoRtn') ?>

    <?php // echo $form->field($model, 'AnexoRtn') ?>

    <?php // echo $form->field($model, 'ResponsavelRtn') ?>

    <?php // echo $form->field($model, 'CreatorRtn') ?>

    <?php // echo $form->field($model, 'CreateDateRtn') ?>

    <?php // echo $form->field($model, 'LastUpdateRtn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
