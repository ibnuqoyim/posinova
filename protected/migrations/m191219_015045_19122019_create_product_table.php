<?php

class m191219_015045_19122019_create_product_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('product', array(
            'product_id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
			'product_name' => 'varchar(45) CHARACTER SET utf8 NOT NULL',
			'product_price' => 'int(10)',
			'product_desc' => 'varchar(105) CHARACTER SET utf8 NOT NULL',
			'product_images' => 'varchar(45) CHARACTER SET utf8 NOT NULL',
			'product_stock' => 'int(10)',
			'product_date' => "timestamp NOT NULL DEFAULT '2000-01-01 00:00:00'",
			'category_id' => 'int(10)',
			"PRIMARY KEY (`product_id`)",
        ));
	}

	public function down()
	{
		echo "m191219_015045_19122019_create_product_table does not support migration down.\n";
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