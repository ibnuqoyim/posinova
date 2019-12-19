<?php

class m191219_015101_19122019_create_orders_table extends CDbMigration
{
	public function up()
	{
		 	$this->createTable('orders', array(
            'id_orders' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
			'nama_petugas' => 'varchar(45) CHARACTER SET utf8 NOT NULL',
			'tgl_order' => "timestamp NOT NULL DEFAULT '2000-01-01 00:00:00'",
			"PRIMARY KEY (`id_orders`)",
			
        ));
	}

	public function down()
	{
		echo "m191219_015101_19122019_create_orders_table does not support migration down.\n";
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