<?php

namespace backend\modules\employee\models;

use Yii;

/**
 * This is the model class for table "{{%employee}}".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property int $department_id
 * @property string $avatar
 * @property int $created_at
 * @property int $dismissal_at
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['user_id', 'department_id', 'created_at', 'dismissal_at'], 'integer'],
            [['name', 'surname', 'patronymic', 'avatar'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'patronymic' => 'Patronymic',
            'department_id' => 'Department ID',
            'avatar' => 'Avatar',
            'created_at' => 'Created At',
            'dismissal_at' => 'Dismissal At',
        ];
    }
}
