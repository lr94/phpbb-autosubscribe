<?php

/**
*
* @copyright (c) 2017 Luca Robbiano (lr94)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'AUTO_SUBSCRIPTION'					=> 'Automatic subscription for topic authors',	
	'AUTO_SUBSCRIPTION_EXPLAIN'			=> 'If set users will automatically subscribe their new topics in this forum',
	
	'AUTO_SUBSCRIPTION_USER'			=> 'Automatically subscribe my new topics',
));
