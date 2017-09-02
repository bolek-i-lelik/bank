<?php

use yii\db\Migration;

/**
 * Class m170902_074103_create_table_task
 */
class m170902_074103_create_table_task extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%task}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'deadline' => $this->integer()->notNull(),
            'importance' => $this->integer(1),
            'responsible' => $this->string()->notNull(),
            'director' => $this->string()->notNull(),
            'observer' => $this->string(),
            'coauthor' => $this->string(),
            'parent' => $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%task}}');
    }
}
