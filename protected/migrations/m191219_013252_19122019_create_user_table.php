<?php

class m191219_013252_19122019_create_user_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('user', array(
            'user_id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
			'user_foto' => 'varchar(45) CHARACTER SET utf8 NOT NULL',
			'username' => 'varchar(45) CHARACTER SET utf8 NOT NULL',
			'fullname' => 'varchar(45) CHARACTER SET utf8 NOT NULL',
			'password' => 'varchar(45) CHARACTER SET utf8 NOT NULL',
			'salt_password' => 'varchar(45) CHARACTER SET utf8 NOT NULL',
			'user_level' => 'varchar(10)',
			'user_create_date' => "timestamp NOT NULL DEFAULT '2000-01-01 00:00:00'",
			'user_status' => 'int(10)',
			"PRIMARY KEY (`user_id`)",
        ));
	}

	public function down()
	{
		echo "m191219_013252_19122019_create_user_table does not support migration down.\n";
		return false;
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