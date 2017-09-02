<?php

use yii\db\Migration;

/**
 * Class m170902_065423_create_table_department
 */
class m170902_065423_create_table_department extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%department}}', [
            'id'=> $this->primaryKey()->unique(),
            'name' => $this->string(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%department}}');
    }
}
