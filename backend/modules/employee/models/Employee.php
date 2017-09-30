<?php

namespace backend\modules\employee\models;

use Yii;
use backend\modules\Department\models\Department;

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
 * @property string $father_name
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
            [['father_name'], 'string', 'max' => 50],
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
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Patronymic',
            'department_id' => 'Department ID',
            'avatar' => 'Avatar',
            'created_at' => 'Принят',
            'dismissal_at' => 'Уволен',
            'father_name' => 'Отчество',
        ];
    }

    /**
     * Вовращает массив с сотрудниками - ключ id, значение имя и отчество
     */
    public static function getEmployees()
    {
        $employees = self::find()->all();
        $arr = [];
        foreach($employees as $employee){
            $arr[$employee->id] = $employee->surname.' '.$employee->name.' '.$employee->father_name;
        }

        return $arr;
    }

    /**
     * Вовращает наименование подразделения
     */
    public function getDepartment($id)
    {
        $department = Department::find()->where(['id' => $id])->one();
        if(isset($department->id)){
            return $department->name;
        }else{
            return '';
        }
    }
}
