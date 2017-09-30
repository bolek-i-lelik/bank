<?php

namespace backend\modules\Department\models;

use Yii;
use backend\modules\employee\models\Employee;

/**
 * This is the model class for table "{{%department}}".
 *
 * @property int $id
 * @property string $name
 * @property int $parent
 * @property int $manager
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%department}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['manager', 'parent'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'parent' => 'Вышестоящее подразделение',
            'manager' => 'Руководитель',
        ];
    }

    /**
     * Вовращает массив с подразделениями - ключ id, значение имя и отчество
     */
    public static function getDepartments()
    {
        $departments = self::find()->all();
        $arr = [];
        $arr[0] = 'Отсутствует';
        foreach($departments as $department){
            $arr[$department->id] = $department->name;
        }

        return $arr;
    }

    /**
     * Возвращает имя родительского подразделения
     */
    public function getParent($id)
    {
        $parent = self::find()->where(['id' => $id])->one();
        if(isset($parent->name)){
            return $parent->name;
        }else{
            return '';
        }
    } 

    /**
     * Возвращает ФИО руководителя
     */
    public function getManagerFIO($id)
    {
        $employee = Employee::find()->where(['id' => $id])->one();
        if(isset($employee->id)){
            return $employee->surname.' '.$employee->name.' '.$employee->father_name;
        }else{
            return 'Не назначен';
        }
    }
}
