<?php
/**
 *
 * phpBB Media Embed PlugIn extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang,[
	// Settings
	'ACP_MEDIA_SETTINGS'				=> 'Indstillinger for medieindlejring',
	'ACP_MEDIA_SETTINGS_EXPLAIN'		=> 'Her kan du konfigurere indstillingerne til Media Embed PlugIn.',
	'ACP_MEDIA_DISPLAY_BBCODE'			=> 'Vis <samp>[MEDIA]</samp>-BBkode på siden hvor indlæg skrives',
	'ACP_MEDIA_DISPLAY_BBCODE_EXPLAIN'	=> 'Hvis den er valgt fra vises BBkode-knappen ikke, men brugerne kan dog stadig bruge <samp>[media]</samp>-tagget i deres indlæg',
	'ACP_MEDIA_ALLOW_SIG'				=> 'Tillad i brugersignaturer',
	'ACP_MEDIA_ALLOW_SIG_EXPLAIN'		=> 'Tillad at brugersignaturer viser indlejret medieindhold.',
	'ACP_MEDIA_ENABLE_CACHE'			=> 'Enable Media Embed cache',
	'ACP_MEDIA_ENABLE_CACHE_EXPLAIN'	=> 'In some case you may notice slower than normal performance when loading media from other sites, especially while loading the same content multiple times (e.g. when editing a post). Enabling this will cache the information Media Embed gathers from sites locally and should improve performance.',
	'ACP_MEDIA_PARSE_URLS'				=> 'Convert plain URLs',
	'ACP_MEDIA_PARSE_URLS_EXPLAIN'		=> 'Enable this to convert plain URLs (not wrapped in <samp>[media]</samp> or <samp>[url]</samp> tags) to embedded media content. Note that changing this setting will only affect new posts, as existing posts have already been parsed.',
	'ACP_MEDIA_PURGE_CACHE'				=> 'Purge Media Embed cache',
	'ACP_MEDIA_PURGE_CACHE_EXPLAIN'		=> 'Media Embed cache is automatically purged once per day, however this button can be used to manually purge its cache now.',
	'ACP_MEDIA_SITE_TITLE'				=> 'Sted-id: %s',
	'ACP_MEDIA_SITE_DISABLED'			=> 'Stedet er i konflikt med en eksisterende BBkode: [%s]',

	// Manage sites
	'ACP_MEDIA_MANAGE'					=> 'Håndter steder for medieindlejring',
	'ACP_MEDIA_MANAGE_EXPLAIN'			=> 'Her kan du håndtere stederne som du vil tillade Media Embed PlugIn at vise indhold fra.',
	'ACP_MEDIA_SITES_ERROR'				=> 'Der er ikke nogen mediesteder at vise.',
	'ACP_MEDIA_SITES_MISSING'			=> 'The following sites are no longer supported or working. Please re-submit this page to remove them.',
]);
