<?php

use yii\db\Migration;

/**
 * Handles adding fathername to table `employee`.
 */
class m170930_155045_add_fathername_column_to_employee_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%employee}}', 'father_name', $this->string(50)->comment('отчество'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%employee}}', 'father_name');
    }
}
