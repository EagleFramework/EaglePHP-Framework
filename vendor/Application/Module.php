<?php
namespace Application;

/**
 * Module
 *
 * @package    Application
 */
class Module extends \Eagle\Module {
	/**
	 * @var    string  Autoloader class
	 */
	protected static $autoloaderClass = "Application\Autoloader";

	/**
	 * @var    string  Directory of Module
	 */
	protected static $modulePath = __DIR__."/Module/";
}
?>