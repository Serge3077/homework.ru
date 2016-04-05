<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<p>Успешно проведен платёж:</p>

<ul>
    <li><label>Номер</label>: <?= Html::encode($model->user_id) ?></li>
    <li><label>Пополнение на сумму</label>: <?= Html::encode($model->amount) ?></li>

</ul>
