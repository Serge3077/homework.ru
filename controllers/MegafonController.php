<?php
/**
 * Created by PhpStorm.
 * User: Serge
 * Date: 30.03.2016
 * Time: 19:03
 */

namespace app\controllers;


use app\models\User_transaction;
use yii\base\Controller;
use Yii;
use app\models\User;

class MegafonController extends Controller
{

    public function actionGetpay()
    {
        $model = new User_transaction();

        if ($model->load(Yii::$app->request->post())&&($model->validate())) {
            $_GET['a'] = $model->user_id;
            return $this->render('confirm', ['model' => $model]);

        }
        else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('getid', ['model' => $model]);
        }
    }

    public function actionSend()
    {

    }

}