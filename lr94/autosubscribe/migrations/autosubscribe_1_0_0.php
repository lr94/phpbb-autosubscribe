<?php

/**
*
* @copyright (c) 2017 Luca Robbiano (lr94)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace lr94\autosubscribe\migrations;

use phpbb\db\migration\migration;

class autosubscribe_1_0_0 extends migration
{
	static public function depends_on()
	{
		return array(
			'\phpbb\db\migration\data\v320\v320',
		);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('autosubscribe_version', '1.0.0')),
		);
	}
	
	public function update_schema()
	{
		return array(
			'add_columns' => array(
				$this->table_prefix . 'forums' => array(
					'forum_auto_subscribe'		=> array('BOOL', 0),
				),
				$this->table_prefix . 'users' => array(
					'user_auto_subscribe'		=> array('BOOL', 0),
				),
			)
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns' => array(
				$this->table_prefix . 'forums' => array(
					'forum_auto_subscribe',
				),
				$this->table_prefix . 'users' => array(
					'user_auto_subscribe',
				),
			),
		);
	}
}
