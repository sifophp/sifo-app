<?php

use Example\Controllers\Home\HomeController;

include ROOT_PATH . '/vendor/sifophp/sifo/config/router.config.php';

// Controller used when no path is passed (home page).
$config['__HOME__'] = HomeController::class;

$config['old'] = 'home/old';
