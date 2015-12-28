require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/local_config.php';
define('LIB_ROOT', __DIR__ . '/../lib');
require_once LIB_ROOT . '/MapperFactory.class.php';

//Show all errors
error_reporting(-1);

//Set up language, time and encoding
mb_language('uni');
mb_detect_order('UTF-8, ISO-8859-1');
mb_internal_encoding('UTF-8');
date_default_timezone_set($_config['timezone']);
bindtextdomain('locales', __DIR__ . '/locales');
bind_textdomain_codeset('locales', 'UTF-8');
textdomain('locales');
putenv('LANGUAGE=' . $_config['locale']);
putenv('LC_ALL=' . $_config['locale']);
putenv('LC_MESSAGE=' . $_config['locale']);
putenv('LANG=' . $_config['locale']);
setlocale(LC_ALL, $_config['locale'] . '.utf8');
if (defined('LC_MESSAGES')) {
	setlocale(LC_MESSAGES, $_config['locale'] . '.utf8');
}
putenv('LC_NUMERIC=C');
setlocale(LC_NUMERIC, 'C');

/**
 * Get a database connection
 *
 * @return resource
 */
function db()
{
	global $_db, $_config;
	if (!$_db) {
		$_db = new mysqli(
			$_config['mysql_host'],
			$_config['mysql_user'],
			$_config['mysql_pass'],
			$_config['mysql_name']
		);
	}
	return $_db;
}
