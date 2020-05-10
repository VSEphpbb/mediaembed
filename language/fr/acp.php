<?php
/**
 *
 * phpBB Media Embed PlugIn. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
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
	$lang = [];
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
// ’ « » “ ” …
//

$lang = array_merge($lang,[
	// Settings
	'ACP_MEDIA_SETTINGS'				=> 'Paramètres des médias intégrés',
	'ACP_MEDIA_SETTINGS_EXPLAIN'		=> 'Depuis cette page il est possible de paramétrer les options de l’extension « phpBB Media Embed PlugIn ».',
	'ACP_MEDIA_DISPLAY_BBCODE'			=> 'Afficher le BBCode <samp>[MEDIA]</samp> sur la page de rédaction des messages',
	'ACP_MEDIA_DISPLAY_BBCODE_EXPLAIN'	=> 'Permet d’activer l’affichage du BBCode <samp>[MEDIA]</samp> sur la page de l’éditeur complet lors de la rédaction d’une réponse ou d’un nouveau sujet. Si l’affichage est désactivé, le bouton du BBCode ne sera pas affiché, mais les utilisateurs pourront saisir manuellement la balise <samp>[media]</samp> dans leurs messages sur les pages accessibles au moyen des boutons « Répondre », « Nouveau sujet » ou dans la réponse rapide.',
	'ACP_MEDIA_ALLOW_SIG'				=> 'Autoriser dans la signature des membres',
	'ACP_MEDIA_ALLOW_SIG_EXPLAIN'		=> 'Permet d’utiliser le BBCode <samp>[MEDIA]</samp> dans le contenu de la signature des membres.',
	'ACP_MEDIA_ENABLE_CACHE'			=> 'Enable Media Embed cache',
	'ACP_MEDIA_ENABLE_CACHE_EXPLAIN'	=> 'In some case you may notice slower than normal performance when loading media from other sites, especially while loading the same content multiple times (e.g. when editing a post). Enabling this will cache the information Media Embed gathers from sites locally and should improve performance.',
	'ACP_MEDIA_PARSE_URLS'				=> 'Convertir les URL simples',
	'ACP_MEDIA_PARSE_URLS_EXPLAIN'		=> 'Permet de convertir les URL simples (non mises entre les balises des BBCodes <samp>[media]</samp> ou <samp>[url]</samp>) en contenu multimédia intégré. Merci de noter que cette fonctionnalité ne concerne que les nouveaux messages, car les messages déjà publiés ont déjà été analysés.',
	'ACP_MEDIA_PURGE_CACHE'				=> 'Purge Media Embed cache',
	'ACP_MEDIA_PURGE_CACHE_EXPLAIN'		=> 'Media Embed cache is automatically purged once per day, however this button can be used to manually purge its cache now.',
	'ACP_MEDIA_SITE_TITLE'				=> 'ID du service : %s',
	'ACP_MEDIA_SITE_DISABLED'			=> 'Ce service entre en conflit avec un BBCode déjà installé sur le forum : [%s]',

	// Manage sites
	'ACP_MEDIA_MANAGE'					=> 'Gestion des services pour les médias intégrés aux messages',
	'ACP_MEDIA_MANAGE_EXPLAIN'			=> 'Depuis cette page il est possible d’autoriser les sites Web des services qui seront pris en charge par l’extension « phpBB Media Embed PlugIn » pour afficher leur contenu dans les messages.',
	'ACP_MEDIA_SITES_ERROR'				=> 'Il n’y aucun site de médias à afficher.',
	'ACP_MEDIA_SITES_MISSING'			=> 'Les sites Web suivants ne sont plus pris en charge ou ne fonctionnent plus. Merci de re-valider cette page pour les retirer.',
]);
