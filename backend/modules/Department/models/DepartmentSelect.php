<?php

namespace backend\modules\Department\models;

use Yii;
use yii\base\Model;


class DepartmentSelect extends Model
{
    /**
     * @inheritdoc
     */
    public $department;
    public static function tableName()
    {
        return 'department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['department', 'each', 'rule' => ['integer']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'department' => 'department'
        ];
    }
}