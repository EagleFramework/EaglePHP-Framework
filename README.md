# EaglePHP Framework

EaglePHP is lightweight HMVC PHP Framework.

 * Supports PHP 7.0+
 * \Eagle is common system namespace for applications. Doesn’t call anyting from \Application
 * \Application as a module in vendor folder. \Application is totally override classes in \Eagle
 * PSR-4 Autoload
 * Fast routring engine with Request and Response chain
 * Doesn’t require defining constants to bootstrap and helper functions
 * Common functions in Object-Oriented
   * Cookie
   * Error Handler, Exception Handler, Shutdown Handler by ErrorHandler
   * File
   * GD, Imagick by ImageAdapter Models
   * Json
   * Session


 *Note: Only \Application files avaible to reach in GitHub*

## Requirements

 * Minimum last two build versions of PHP 5.6
 * GD or Imagick extension for ImageAdapter Models
 * Gettext extension for I18n Class
 * Mbstring extension for UTF8 Class
 * Partially Requirements
  * PHP 7.0.0 for Session::start()'s parameter $options
  * PHP 7.1.0 for Session::create_id() and gc()
