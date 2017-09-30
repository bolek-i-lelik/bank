<?php

use yii\db\Migration;

/**
 * Handles adding parent_id to table `department`.
 */
class m170930_154229_add_parent_id_column_to_department_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%department}}', 'parent', $this->integer()->comment('Родительское подразделение'));
        $this->addColumn('{{%department}}', 'manager', $this->integer()->comment('Руководитель'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%department}}', 'parent');
        $this->dropColumn('{{%department}}', 'manager');
    }
}
