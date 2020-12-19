<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employees */
/* @var $form ActiveForm */
?>
<div class="Employees-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'age') ?>
        <?= $form->field($model, 'company') ?>
        <?= $form->field($model, 'name') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Employees-form -->
