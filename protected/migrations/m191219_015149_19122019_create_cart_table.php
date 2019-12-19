<?php

class m191219_015149_19122019_create_cart_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('cart', array(
            'cart_id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
			'cart_session' => 'varchar(45) CHARACTER SET utf8 NOT NULL',
			'cart_date' => "timestamp NOT NULL DEFAULT '2000-01-01 00:00:00'",
			'cart_qty' => 'int(10)',
			'product_id' => 'int(10)',
			"PRIMARY KEY (`cart_id`)",
        ));
	}

	public function down()
	{
		echo "m191219_015149_19122019_create_cart_table does not support migration down.\n";
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