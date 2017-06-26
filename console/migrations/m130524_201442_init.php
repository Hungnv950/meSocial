<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $curTime = time();
        $this->insert('{{%user}}', [
            'username' => 'admin',
            'email' => 'markK58uet@gmail.com',
            'password_hash' => Yii::$app->security->generatePasswordHash("admin@123456"),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'confirmed_at' => $curTime,
            'created_at' => $curTime,
            'updated_at' => $curTime,
        ]);
        $this->addColumn('user', 'full_name', $this->string(128));
    }

    public function down()
    {

    }
}
