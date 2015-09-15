<?php

class m150915_011159_create_user_table extends CDbMigration
{
    public function up()
    {
        $this->createTable( 'user', array(
            'id'       => 'int(10) unsigned NOT NULL auto_increment',
            'username' => 'varchar(200) NOT NULL',
            'password' => 'char(40) NOT NULL',
            'email'    => 'varchar(200) NOT NULL',
            'PRIMARY KEY (`id`)',
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8' );
    }

    public function down()
    {
        $this->dropTable( 'user' );
    }

    /*
    // Use safeUp/safeDown to do migration with transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}