<?php

use yii\db\Migration;

/**
 * Class m170902_063552_create_table_employee
 */
class m170902_063552_create_table_employee extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%employee}}', [
            'id'=> $this->primaryKey()->unique(),
            'user_id' => $this->integer(),
            'name' => $this->string(),
            'surname' => $this->string(),
            'patronymic' => $this->string(),
            "department_id" =>$this->integer(),
            "avatar" => $this->string(),
            "created_at" => $this->integer(11),
            "dismissal_at" =>$this->integer(11)

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%employee}}');
    }
}
