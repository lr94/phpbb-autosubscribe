<?php

/**
*
* @copyright (c) 2017 Luca Robbiano (lr94)
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'AUTO_SUBSCRIPTION'					=> 'الإشتراك التلقائي لكاتب الموضوع ',	
	'AUTO_SUBSCRIPTION_EXPLAIN'			=> 'اختيارك "نعم" يعني أن الأعضاء سوف يشتركون تلقائياً في المواضيع الجديدة الخاصة بهم في هذا المنتدى',
	
	'AUTO_SUBSCRIPTION_USER'			=> 'الإشتراك تلقائياً في مواضيعي الجديدة ',
));
