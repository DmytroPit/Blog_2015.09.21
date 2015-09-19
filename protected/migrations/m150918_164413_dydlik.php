<?php

class m150918_164413_dydlik extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable(
			'pervayatablica',
			array(
				'id' => 'INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT',

				'label' => 'VARCHAR(200) NOT NULL DEFAULT ""',


			)
		);
	}

	public function safeDown()
	{
		$this->dropTable('pervayatablica');
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