<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once  APPPATH . '/third_party/PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

use PhpOffice\PhpWord\Style\Font;
use PhpOffice\PhpWord\Style\Paragraph;

Autoloader::register();
Settings::loadConfig();
Settings::setOutputEscapingEnabled(true);
class Phpword extends Autoloader {

}
