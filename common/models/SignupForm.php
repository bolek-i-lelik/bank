<?php

namespace common\models;
use yii\base\Model;

class SignupForm extends Model{

    public $first_name;
    public $last_name;
    public $password;

    public function rules()
    {
        return [
            [['first_name', 'last_name', 'password'], 'required', 'message' => 'Заполните поле'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'password' => 'Пароль',
        ];
    }

}