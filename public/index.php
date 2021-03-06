<?php
/**
 * EaglePHP Framework
 *
 * @author     Cem Demirkartal
 * @copyright  (c) 2016-2018 Cem Demirkartal
 * @license    The MIT License
 * @version    1.0.180123
 */
/** Set namespace to work */
namespace Application;

/** Initialize Eagle */
require __DIR__."/../vendor/Eagle/Eagle.php";
\Eagle\Eagle::init();

/** Load Module and Initialize */
\Eagle\Module::load("Application", __DIR__."/../vendor/ApplicationDefault", true);
Application::init();

/** Force Request and Print */
$request = Request::forge();
if($response = $request->execute()){ // Execute "Requested URI"
	$response->send(true);
}
