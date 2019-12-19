<?php

class m191219_015114_19122019_create_category_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('category', array(
            'category_id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
			'category_name' => 'varchar(45) CHARACTER SET utf8 NOT NULL',
			'category_status' => 'int(10)',
			"PRIMARY KEY (`category_id`)",
        ));
	}

	public function down()
	{
		echo "m191219_015114_19122019_create_category_table does not support migration down.\n";
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