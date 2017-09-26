<?php

namespace backend\modules\employee\models;

use Yii;
use yii\base\Model;

class EmployeeSelect extends Model
{
    /**
     * @inheritdoc
     */
    public $employees;
    public static function tableName()
    {
        return '{{%employee}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['employees', 'each', 'rule' => ['integer']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employees' => 'employees'
        ];
    }
}
