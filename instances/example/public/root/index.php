<?php
/**
 * Point of entry for this instance. Apache points to this file.
 *
 * All PHP requests should be directed to this file via Apache using mod_rewrite or mod_alias or .htaccess (not really efficient).
 */

// Get the path to the root folder. ( 5 folders up from the current file):
define('ROOT_PATH', realpath(dirname(__FILE__, 5)));

// Instance name (folder under instances):
$instance = basename(dirname(__FILE__, 3));


require ROOT_PATH . '/vendor/sifophp/sifo/src/Bootstrap.php';

// Execute your instance:
\Sifo\Bootstrap::execute($instance);
