<?php

namespace console\controllers;

use common\models\User;

class AppController extends \yii\console\Controller
{

    public function actionInit()
    {

        $model = User::find()->where(['username' => 'admin'])->one();
        if (empty($model)) {
            $user = new User();
            $user->username = 'admin';
            $user->email = 'admin@admin.ru';
            $user->setPassword('admin');
            $user->generateAuthKey();
            if ($user->save()) {
                echo 'good';
            }
        }

    }

}