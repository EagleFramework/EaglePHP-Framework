<?php
namespace Application;

/**
 * Autoloader
 *
 * @package    Application
 */
class Autoloader extends \Eagle\Autoloader {
	/**
	 * @var    callable The loader
	 */
	protected static $loader = "Application\Autoloader::loadClass";
}
