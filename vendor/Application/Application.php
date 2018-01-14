<?php
namespace Application;

/**
 * Application
 *
 * @package    Application
 * @author     Cem Demirkartal
 * @version    1.0.180901
 */
class Application {
	/**
	 * @var    string[] Config files to load
	 */
	protected static $configFiles = array("config", "routes");

	/**
	 * @var    bool    Initinalized as module
	 */
	protected static $module = null;

	/**
	 * Initialize settings
	 *
	 * @param  bool    $module     Initinalize as module
	 * @return bool
	 */
	public static function init($module = false){
		if(static::$module === null){
			static::$module = $module;
			Autoloader::register();
			if(!empty(static::$configFiles)){
				foreach(static::$configFiles as $file){
					Config::load($file);
				}
			}
			if(Config::get("base_url") === null){
				Config::set("base_url", Request::getBaseUrl());
			}
			if($routes = Config::get("routes")){
				Router::import($routes);
			}
			if(!static::$module){ // Set configs if it's not module
				ErrorHandler::displaying(Config::get("display_errors"));
				ErrorHandler::reporting(Config::get("error_repoting"));
				ErrorHandler::register();
				if($locale = Config::get("locale")){
					I18n::setLocale($locale);
				}
				if($timezone = Config::get("timezone")){
					Timezone::set($timezone);
				}
			}
			return true;
		}
		return false;
	}
}
