<?php
namespace Application;

/**
 * ErrorHandler
 *
 * @package    Application
 */
class ErrorHandler extends \Eagle\ErrorHandler {
	/**
	 * @var    array   Handlers to register
	 */
	protected static $handlers = array(
		"error"		=> "Application\ErrorHandler::ErrorHandler",
		"exception"	=> "Application\ErrorHandler::ExceptionHandler",
		"shutdown"	=> "Application\ErrorHandler::ShutdownHandler"
	);
}
?>