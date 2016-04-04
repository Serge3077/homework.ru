<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>ID</label>: <?= Html::encode($model->user_id) ?></li>

</ul>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'amount')->textInput(['autofocus' => false])->hint('сумма пополнения')->label('Сумма') ?>
<div class="form-group">
    <?= Html::submitButton('Далее', ['class' => 'btn btn-primary']) ?>
</div>
<?php $form = ActiveForm::end(); ?>

<?php print_r($_GET); ?>
<p><?= Html::a('Оплатить', ['/megafon/send'], ['class'=>'btn btn-primary']) ?></p>
