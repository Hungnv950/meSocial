<?php

use yii\db\Migration;

class m170321_103418_migrate_create_table_literature extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%literature}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
            'img' => $this->string()->notNull(),
            'description' => $this->string(),
            'content'=>$this->text(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'type' => $this->string(32)->defaultValue('me'),
            'created_at' => $this->integer(11)->notNull(),
            'updated_at' => $this->integer(),
            'user_create' => $this->integer(),
            'user_update' => $this->integer(),

            'view' =>$this->integer(11)->defaultValue(0),
            'like' => $this->integer()->defaultValue(0),
            'comments'=> $this->text()
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%literature}}');
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
