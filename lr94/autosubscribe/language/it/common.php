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
	'AUTO_SUBSCRIPTION'					=> 'Sottoscrizione automatica per gli autori degli argomenti',	
	'AUTO_SUBSCRIPTION_EXPLAIN'			=> 'Se impostato su sì in questo forum gli autori dei nuovi argomenti li sottoscriveranno automaticamente.',
		
	'AUTO_SUBSCRIPTION_USER'			=> 'Sottoscrivi automaticamente i miei nuovi topic',
));
