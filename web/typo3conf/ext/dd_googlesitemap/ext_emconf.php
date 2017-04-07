<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "dd_googlesitemap".
 *
 * Auto generated | Identifier: 94592dba49e5bb9e635a0505433371a7
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Google sitemap',
	'description' => 'High performance Google sitemap implementation that avoids typical errors by other similar extensions',
	'category' => 'fe',
	'version' => '2.1.3',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => 'typo3temp/dd_googlesitemap',
	'clearcacheonload' => true,
	'author' => 'Dmitry Dulepov',
	'author_email' => 'dmitry.dulepov@gmail.com',
	'author_company' => 'SIA "ACCIO"',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-8.7.999',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:19:{s:9:"README.md";s:4:"ee4d";s:13:"composer.json";s:4:"0c4b";s:12:"ext_icon.gif";s:4:"0709";s:17:"ext_localconf.php";s:4:"6678";s:14:"ext_tables.php";s:4:"43cf";s:14:"ext_tables.sql";s:4:"526a";s:24:"ext_typoscript_setup.txt";s:4:"e640";s:13:"locallang.xml";s:4:"e81a";s:46:"Classes/Generator/AbstractSitemapGenerator.php";s:4:"1718";s:32:"Classes/Generator/EntryPoint.php";s:4:"88aa";s:43:"Classes/Generator/PagesSitemapGenerator.php";s:4:"db3f";s:44:"Classes/Generator/TtNewsSitemapGenerator.php";s:4:"7711";s:25:"Classes/Hooks/TceMain.php";s:4:"a4f2";s:45:"Classes/Renderers/AbstractSitemapRenderer.php";s:4:"f36d";s:41:"Classes/Renderers/NewsSitemapRenderer.php";s:4:"691d";s:45:"Classes/Renderers/StandardSitemapRenderer.php";s:4:"4e11";s:46:"Classes/Scheduler/AdditionalFieldsProvider.php";s:4:"f12e";s:26:"Classes/Scheduler/Task.php";s:4:"94b0";s:14:"doc/manual.sxw";s:4:"ab89";}',
);

?>