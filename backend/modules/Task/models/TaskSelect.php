<?php

namespace backend\modules\Task\models;

use Yii;
use yii\base\Model;


class TaskSelect extends Model
{
    /**
     * @inheritdoc
     */
    public $tasks;
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['tasks', 'each', 'rule' => ['integer']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tasks' => 'tasks'
        ];
    }
}