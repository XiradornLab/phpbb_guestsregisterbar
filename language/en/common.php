<?php
/** 
* 
* @package guests register bar
* @copyright (c) 2015 alex75
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
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
'WELC'			=> 'Welcome to',
'REGNOW'			=> 'Click here to register',
'ORLOGIN'			=> 'or please',
));