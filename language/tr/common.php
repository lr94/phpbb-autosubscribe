<?php

/**
*
* @copyright (c) 2017 pikachuturkey
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
	'AUTO_SUBSCRIPTION'					=> 'Konu yazarları için otomatik abonelik',	
	'AUTO_SUBSCRIPTION_EXPLAIN'			=> 'Ayarlandığında kullanıclar bu forumda bundan sonra gönderdikleri yeni konularına otomatik olarak abone olacaklar',
	
	'AUTO_SUBSCRIPTION_USER'			=> 'Yeni konularıma otomatik abone ol',
));
