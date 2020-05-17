<?php
/**
*
* @package phpBB Extension - phpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'COUNTDOWN_TITLE'					=> 'phpBB Cuenta Regresiva',
	'COUNT_DOWNCOUNT'					=> 'Descendente',
	'COUNT_UPCOUNT'						=> 'Ascendente',
	'COUNTDOWN_CONFIG_SET'				=> 'Configuración',
	'COUNTDOWN_CONFIG_SAVED'			=> 'Opciones de phpBB Cuenta Regresiva guardadas',
	'COUNTDOWN_ENABLE'					=> 'Activar cuenta regresiva',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Activar o desactivar phpBB Cuenta Regresiva.',
	'COUNTDOWN_DIRECTION' 				=> 'Dirección de cuenta regresiva',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'La extensión de cuenta regresiva puede contar hacia arriba y hacia abajo.',
	'COUNTDOWN_DATE' 					=> 'Fecha de la cuenta regresiva',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Ejemplo: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Texto de la cuenta regresiva',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'El texto se mostrará justo antes de la cuenta regresiva.',
	'COUNTDOWN_COMPLETE'	 			=> 'Texto completo de cuenta regresiva',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Este texto reemplazará la cuenta regresiva cuando se complete.',
	'COUNTDOWN_TESTMODE' 				=> 'Activar modo de prueba',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Si el modo de prueba está activado solo los administradores pueden ver la cuenta regresiva.',
	'COUNTDOWN_YEAR'	 				=> 'Activar años',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Activa esta función para habilitar años en la cuenta regresiva.',
	'COUNTDOWN_MONTH'	 				=> 'Activar meses',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Activa esta función para habilitar meses en la cuenta regresiva.',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Habilitar zona horaria',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Activa o desactiva la zona horaria aquí.',
	'COUNTDOWN_OFFSET' 					=> 'Configuración de zona horaria',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Si deseas utilizar una zona horaria específica para todos los usuarios, puede escribirla aquí.<br />Como "-6" para la hora estándar central y "4" para la hora estándar del Golfo.',
));
