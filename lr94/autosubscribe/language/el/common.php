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
	'AUTO_SUBSCRIPTION'					=> 'Αυτόματη εγγραφή για συγγραφείς του θέματος',	
	'AUTO_SUBSCRIPTION_EXPLAIN'			=> 'Αν οριστεί, οι χρήστες θα εγγράφονται αυτόματα στα νέα τους θέματα σε αυτή τη Δημ Συζήτηση.',
	
	'AUTO_SUBSCRIPTION_USER'			=> 'Αυτόματη εγγραφή στα νέα μου θέματα',
));
