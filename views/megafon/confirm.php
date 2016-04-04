<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>ID</label>: <?= Html::encode($model->user_id) ?></li>
    <li><label>Сумма</label>: <?= Html::encode($model->amount) ?></li>

</ul>

<?php print_r($_GET); ?>
<p><?= Html::a('Оплатить', ['/megafon/send'], ['class'=>'btn btn-primary']) ?></p>
