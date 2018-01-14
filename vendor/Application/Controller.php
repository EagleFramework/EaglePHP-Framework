<?php
namespace Application;

/**
 * Controller
 *
 * @package    Application
 */
class Controller extends \Eagle\Controller {
	/**
	 * @var    string  Directory of locale
	 */
	protected $localePath = __DIR__."/Locale/";

	/**
	 * @var    string  Response class
	 */
	protected $responseClass = "Application\Response";

	/**
	 * @var    string  View Class
	 */
	protected $viewClass = "Application\View";

	/**
	 * @var    string  Directory of view
	 */
	protected $viewPath = __DIR__."/View/";
}
