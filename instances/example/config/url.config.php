<?php
// Do not translate:

use Sifo\Http\Domains;
use Sifo\Http\Urls;

$config['base'] = $base = Urls::$base_url;
$config['domain'] = $domain = Domains::getInstance()->getDomain();
$config['subdomain'] = $subdomain = Domains::getInstance()->getSubdomain();
$config['lang'] = $subdomain = Domains::getInstance()->getLanguage();
$config['static'] = Domains::getInstance()->getStaticHost();

// Sifo debug
$config['sifo_debug_analyzer'] = $base . '/sifo-debug-analyzer';
$config['sifo_debug_actions'] = $base . '/sifo-debug-actions';

// Translator
$config['translate'] = $base . '/translate';
$config['translations_save'] = $base . '/translation-save';
$config['translations_rebuild'] = $base . '/translation-rebuild';
$config['translations_add'] = $base . '/translations-add';
$config['translations_actions'] = $base . '/translation-actions';

$config["locales"] = $base . '/locales';
$config["locales_save"] = $base . '/locales-save';

// Translate below:
