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
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            ['department', 'each', 'rule' => ['integer']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'department' => 'department'
        ];
    }
}