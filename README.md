# EaglePHP Framework

EaglePHP is lightweight HMVC PHP Framework.

 * Supports PHP 7.0+
 * \Eagle is common system namespace for applications. Doesn’t call anyting from \Application
 * \Application as a module in vendor folder. \Application is totally override classes in \Eagle
 * PSR-4 Autoload
 * Fast routring engine with Request and Response chain
 * Doesn’t require defining constants to bootstrap and helper functions
 * Common functions in Object-Oriented Form
   * Cookie
   * Error Handler, Exception Handler, Shutdown Handler by ErrorHandler
   * File
   * GD and Imagick by ImageAdapter Models
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

### Requirements Table

| **Property**                   | **Used by**        | **Required** | **for: 5.6.0** | **for: 7.0.0** | **for: 7.1.0** |
|--------------------------------|--------------------|--------------|----------------|----------------|----------------|
| Interfaces                     | -                  | 5.0.0        | X              | X              | X              |
| Namespace                      | EaglePHP           | 5.3.0        | X              | X              | X              |
| Autoload (Namespace)           | EaglePHP           | 5.3.0        | X              | X              | X              |
| Last Static Bindings           | EaglePHP           | 5.3.0        | X              | X              | X              |
| Traits                         | -                  | 5.4.0        | X              | X              | X              |
| finally keyword                | -                  | 5.5.0        | X              | X              | X              |
| yield keyword                  | -                  | 5.5.0        | X              | X              | X              |
| Constant scalar expression     | EaglePHP           | 5.6.0        | X              | X              | X              |
|                                |                    |              |                |                |                |
| **Function**                   | **Used by**        | **Required** | **for: 5.6.0** | **for: 7.0.0** | **for: 7.1.0** |
| error_clear_last()             | class ErrorHandler | 7.0.0        | 5.4.0 *        | X              | X              |
| json_last_error()              | class Json         | 5.3.0        | X              | X              | X              |
| json_decode() param $options   | class Json         | 5.4.0        | X              | X              | X              |
| json_last_error_msg()          | class Json         | 5.5.0        | X              | X              | X              |
| json_encode() param $depth     | class Json         | 5.5.0        | X              | X              | X              |
| session_register_shutdown()    | class Session      | 5.4.0        | X              | X              | X              |
| session_status()               | class Session      | 5.4.0        | X              | X              | X              |
| session_abort()                | class Session      | 5.6.0        | X              | X              | X              |
| session_reset()                | class Session      | 5.6.0        | X              | X              | X              |
| session_start() param @options | class Session      | 7.0.0        | 7.0.0          | X              | X              |
| session_create_id()            | class Session      | 7.1.0        | 7.1.0          | 7.1.0          | X              |
| session_gc()                   | class Session      | 7.1.0        | 7.1.0          | 7.1.0          | X              |
|                                |                    |              |                |                |                |
| **Extension**                  | **Used by**        | **Required** | **for: 5.6.0** | **for: 7.0.0** | **for: 7.1.0** |
| Fileinfo (Default on 5.3.0)    | class File         | 5.3.0        | X              | X              | X              |
| Filter (Default on 5.2.0)      | class Valid        | 5.2.0        | X              | X              | X              |
| Json (Default on 5.2.0)        | class Json         | 5.2.0        | X              | X              | X              |
| GD                             | class Image        | gd           |                |                |                |
| Gettext                        | class I18n         | gettext      |                |                |                |
| Mbstring                       | class UTF8         | mbstring     |                |                |                |

*Decreased
