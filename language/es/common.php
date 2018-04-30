<?php

/**
*
* @copyright (c) 2017 Raul [ThE KuKa]
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
	'AUTO_SUBSCRIPTION'					=> 'Suscripción automática para autores de temas',	
	'AUTO_SUBSCRIPTION_EXPLAIN'			=> 'Si se establece, los usuarios se suscriben automáticamente a sus nuevos temas en este foro.',
	
	'AUTO_SUBSCRIPTION_USER'			=> 'Suscribirme automáticamente a mis nuevos temas',
));
