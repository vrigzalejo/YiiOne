<?php

class m150915_011130_create_post_table extends CDbMigration
{
    public function up()
    {
        $this->createTable( 'post', array(
            'id'         => 'int(10) unsigned NOT NULL auto_increment',
            'created_on' => 'int(11) unsigned NOT NULL',
            'title'      => 'varchar(255) NOT NULL',
            'content'   => 'text NOT NULL',
            'PRIMARY KEY (`id`)',
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8' );
    }

    public function down()
    {
        $this->dropTable( 'post' );
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