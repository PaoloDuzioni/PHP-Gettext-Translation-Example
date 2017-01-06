<?php //Import php-gettext libraries
require_once("lib/php-gettext/streams.php");
require_once("lib/php-gettext/gettext.php");

// Defaut language English
$lang = (! isset($_GET['lang']) ) ? 'en_EN' : $_GET['lang'] ;

// Constant value to check actual lang on templates
define("CURRENT_LANG", $lang);

// Init php-gettext classes
$locale_lang= CURRENT_LANG;
$locale_file= new FileReader("languages/$locale_lang/$locale_lang.mo");
$locale_fetch = new gettext_reader($locale_file);

/**
 * FUNCTIONS
 */

// Return the translated string as value
function __($text){
  global $locale_fetch;
  return $locale_fetch->translate($text);
}

// Print the translates string
function _e($text){
  global $locale_fetch;
  echo $locale_fetch->translate($text);
}
