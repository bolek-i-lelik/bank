<?php

namespace backend\modules\Task\models;

use Yii;

/**
 * This is the model class for table "Task".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $created_at
 * @property int $deadline
 * @property int $importance
 * @property string $responsible
 * @property string $director
 * @property string $observer
 * @property string $coauthor
 * @property int $parent
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%task}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'created_at', 'deadline', 'responsible', 'director'], 'required'],
            [['created_at', 'deadline', 'importance', 'parent'], 'integer'],
            [['name', 'description', 'responsible', 'director', 'observer', 'coauthor'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'created_at' => 'Created At',
            'deadline' => 'Deadline',
            'importance' => 'Importance',
            'responsible' => 'Responsible',
            'director' => 'Director',
            'observer' => 'Observer',
            'coauthor' => 'Coauthor',
            'parent' => 'Parent',
        ];
    }
}
