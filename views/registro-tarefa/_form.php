<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegistroTarefa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registro-tarefa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_TarefaFk')->textInput() ?>

    <?= $form->field($model, 'Id_UserFk')->textInput() ?>

    <?= $form->field($model, 'Comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lembrete')->textInput() ?>

    <?= $form->field($model, 'StartDate')->textInput() ?>

    <?= $form->field($model, 'EndDate')->textInput() ?>

    <?= $form->field($model, 'Creator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CreateDate')->textInput() ?>

    <?= $form->field($model, 'Modifydate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
