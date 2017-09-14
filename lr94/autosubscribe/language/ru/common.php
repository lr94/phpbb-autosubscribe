<?php

/**
*
* @copyright (c) 2017 Miroslav Sitnik
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
	'AUTO_SUBSCRIPTION'					=> 'Автоматическая подписка авторов тем',	
	'AUTO_SUBSCRIPTION_EXPLAIN'			=> 'Если пользователи будут автоматически подписываться на новые темы в этом форуме',
	
	'AUTO_SUBSCRIPTION_USER'			=> 'Автоматически подписаться на мои новые темы',
));
