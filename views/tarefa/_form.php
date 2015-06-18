<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tarefa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarefa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NomeTrf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DescTrf')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'StatusTrf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrioridadeTrf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProgressoTrf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AnexoTrf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DuracaoTfr')->textInput() ?>

    <?= $form->field($model, 'Id_Rotina')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
