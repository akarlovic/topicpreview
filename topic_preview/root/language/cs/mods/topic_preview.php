<?php
/**
*
* topic_preview [Čeština]
*
* @package Topic Preview
* @version $Id$
* @copyright (c) 2010 Matt Friedman (Pro nahlášení chyb v překladu a podporu překladu použijte stránky http://www.skolaponetu.cz. Děkujeme)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'TOPIC_PREVIEW'			=> 'Úryvek z tématu',
	'TOPIC_PREVIEW_EXPLAIN'	=> 'Zde máte možnost zadat počet znaků zobrazených v úryvku z tématu.<br /><strong>Zadáním 0 funkci vypnete.</strong>',
	'CHARS'					=> 'Počet znaků',
	'DISPLAY_TOPIC_PREVIEW'	=> 'Zobrazit úryvek z tématu',	
	'TOPIC_PREVIEW_STRIP'			=> 'Skryté BBkódy',
	'TOPIC_PREVIEW_STRIP_EXPLAIN'	=> 'Zde máte možnost zadat BBkódy, které v úryvku nebudou zobrazeny. Pro oddělení využijte znak |.<br /><i>Například: list|code|quote.</i>',

	// Installation language vars (UMIL)
	'TP_MOD'	=> 'Úryvek z tématu',
));

?>