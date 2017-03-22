<?php

use yii\db\Migration;

class m170322_120549_create_table_user_band extends Migration
{
    public function up()
    {
        $this->createTable('band', [
            'id' => $this->primaryKey(),
            'status' => $this->integer(11)->notNull(),
            'description' => $this->string(),
            'time' => $this->integer(),
        ]);
    }

    public function down()
    {
        $this->dropTable('band');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
