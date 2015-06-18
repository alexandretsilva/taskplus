<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rotina */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rotina-form">

    <?php $form = ActiveForm::begin([
        'id' => 'active-form',
        'options' => [
                     // 'class' => 'form-inline',
                      'enctype' => 'multipart/form-data'            
                     ]
    ]); ?>

    <?= $form->field($model, 'NomeRtn')->textInput(['maxlength' => true])->hint('Please enter your name')->label('Routine Name') ?>
         
    <?= $form->field($model, 'DescricaoRtn')->textarea(['maxlength' => true],array('rows'=>2,'cols'=>5)); ?>



    <?= $form->field($model, 'FrequenciaRtn')->dropDownList
            ([''=>'Choose the frenquency... ',
              'Daily' => 'Daily',
              'Weekly' => 'Weekly',
              'Monthly' => 'Monthly',
              'Demand' => 'Demand',  
            ]) ?>
    
  
    <?= $form->field($model, 'DuracaoRtn')->textInput(['maxlength' => true]) ?>

   
    
    <?= $form->field($model, 'GrupoRtn')->dropDownList
            ([''=>'Choose the Group... ',
              'BOM' => 'BOM',
              'DVPMS' => 'DVPMS',  
              'ECO' => 'ECO',
              'LOCAL DEVELOPMENT' => 'LOCAL DEVELOPMENT',  
              'NPI' => 'NPI',  
            ]) ?>

    <?= $form->field($model, 'AnexoRtn')->fileInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'ResponsavelRtn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CreatorRtn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CreateDateRtn')->textInput() ?>

    <?= $form->field($model, 'LastUpdateRtn')->textInput()->hiddenInput(['value' => date("Y-m-d H:i:s")])->label(false) ?>
    
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        
    </div>

    <?php ActiveForm::end(); ?>

</div>
