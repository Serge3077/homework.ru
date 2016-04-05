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

class MegafonController extends Controller
{

    public function actionGetpay()
    {
        $model = new User_transaction();
        if ($model->load(Yii::$app->request->post())&&($model->validate())) {
            $md5=md5($model->user_id . $model->amount . $model->SALT);
            $path = 'http://megafon.ru/server.php?a=' . $model->user_id . '&b=' . $model->amount . '&md5=' . $md5;
            if( $curl = curl_init() ) {
                curl_setopt($curl, CURLOPT_URL, $path);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
                $out = curl_exec($curl);
                curl_close($curl);
                if ($out != $model->success){
                    return $this->render('err', ['model' => $model]);
                }
                else {
                    return $this->render('confirm', ['model' => $model]);
                }
            }
        }

        else {
            return $this->render('getid', ['model' => $model]);
            // либо страница отображается первый раз, либо есть ошибка в данных
        }
    }

}