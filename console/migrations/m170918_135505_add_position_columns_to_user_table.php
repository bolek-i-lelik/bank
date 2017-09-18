<?php

use yii\db\Migration;

/**
 * Handles adding position to table `user`.
 */
class m170918_135505_add_position_columns_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%user}}', 'first_name', $this->string()->comment('Имя'));
        $this->addColumn('{{%user}}', 'last_name', $this->string()->comment('Фамилия'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%user}}', 'first_name');
        $this->dropColumn('{{%user}}', 'last_name');
    }
}
