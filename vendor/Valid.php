<?php
namespace Application;

/**
 * Valid
 *
 * @package    Application
 */
class Valid extends \Eagle\Valid {
	/**
	 * @var    array   Validation functions
	 */
	protected static $functions = array(
		"json"		=> "Application\Json::isJson",
		"timezone"	=> "Application\Timezone::isTimezone",
		"utf8"		=> "Application\UTF8::isUTF8",
	);
}
?>