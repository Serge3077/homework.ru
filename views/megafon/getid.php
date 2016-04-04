<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form ActiveForm */
?>
<div class="getpay">
    <h1>Введите ваш ID!</h1>

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_id')->textInput(['autofocus' => true])->hint('Пожалуйста введите ваш номер')->label('ID') ?>

        <?= $form->field($model, 'amount')->textInput(['autofocus' => false])->hint('сумма пополнения')->label('Сумма') ?>

        <div class="form-group">
            <?= Html::submitButton('Далее', ['class' => 'btn btn-primary', 'id' => 'submit']) ?>
        </div>
    <?php ActiveForm::end(); ?>
    <div id="block"></div>

</div><!-- getpay -->
