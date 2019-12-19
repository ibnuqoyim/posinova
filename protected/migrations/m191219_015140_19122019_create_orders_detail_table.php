<?php

class m191219_015140_19122019_create_orders_detail_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('orders_detail', array(
            'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
			'id_orders' =>  'int(10)',
			'product_id' =>  'int(10)',
			'jumlah' =>  'int(10)',
			"PRIMARY KEY (`id`)",
        ));
	}

	public function down()
	{
		echo "m191219_015140_19122019_create_orders_detail_table does not support migration down.\n";
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