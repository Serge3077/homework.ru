<?php
/**
 * Created by PhpStorm.
 * User: Serge
 * Date: 30.03.2016
 * Time: 22:07
 */

namespace app\models;


use yii\db\ActiveRecord;

class User_transaction extends ActiveRecord {

    public $user_id;
    public $amount;

    public function rules()
    {
        return [
            [['user_id'], 'required']
        ];
    }


} 