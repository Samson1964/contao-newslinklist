<?php

/**
 * Klassen registrieren
 */
ClassLoader::addClasses(array
(
	// Classes
	'newslinklistClass' => 'system/modules/newslinklist/classes/NewsLinkliste.php',
));


/**
 * Templates registrieren
 */
TemplateLoader::addFiles(array
(
	'ce_newslinklist'         => 'system/modules/newslinklist/templates',
	'newslinklist_mini'       => 'system/modules/newslinklist/templates',
	'newslinklist_default'    => 'system/modules/newslinklist/templates',
	'newslinklist_full'       => 'system/modules/newslinklist/templates',
));
