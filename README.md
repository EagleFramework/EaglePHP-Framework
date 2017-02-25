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

| Property                       | **Used by**  | **Req.** | **for: 5.6** | **for: 7.0** | **for: 7.1** |
|--------------------------------|--------------|----------|--------------|--------------|--------------|
| Interfaces                     | -            | 5.0.0    | X            | X            | X            |
| Namespace                      | EaglePHP     | 5.3.0    | X            | X            | X            |
| Autoload (Namespace)           | EaglePHP     | 5.3.0    | X            | X            | X            |
| Last Static Bindings           | EaglePHP     | 5.3.0    | X            | X            | X            |
| Traits                         | -            | 5.4.0    | X            | X            | X            |
| finally keyword                | -            | 5.5.0    | X            | X            | X            |
| yield keyword                  | -            | 5.5.0    | X            | X            | X            |
| Constant scalar expression     | EaglePHP     | 5.6.0    | X            | X            | X            |
|                                |              |          |              |              |              |
| **Function**                   | **Used by**  | **Req.** | **for: 5.6** | **for: 7.0** | **for: 7.1** |
| error_clear_last()             | ErrorHandler | 7.0.0    | 5.4.0 *      | X            | X            |
| json_last_error()              | Json         | 5.3.0    | X            | X            | X            |
| json_decode() param $options   | Json         | 5.4.0    | X            | X            | X            |
| json_last_error_msg()          | Json         | 5.5.0    | X            | X            | X            |
| json_encode() param $depth     | Json         | 5.5.0    | X            | X            | X            |
| session_register_shutdown()    | Session      | 5.4.0    | X            | X            | X            |
| session_status()               | Session      | 5.4.0    | X            | X            | X            |
| session_abort()                | Session      | 5.6.0    | X            | X            | X            |
| session_reset()                | Session      | 5.6.0    | X            | X            | X            |
| session_start() param @options | Session      | 7.0.0    | 7.0.0        | X            | X            |
| session_create_id()            | Session      | 7.1.0    | 7.1.0        | 7.1.0        | X            |
| session_gc()                   | Session      | 7.1.0    | 7.1.0        | 7.1.0        | X            |
|                                |              |          |              |              |              |
| **Extension**                  | **Used by**  | **Req.** | **for: 5.6** | **for: 7.0** | **for: 7.1** |
| Fileinfo (Default on 5.3.0)    | File         | 5.3.0    | X            | X            | X            |
| Filter (Default on 5.2.0)      | Valid        | 5.2.0    | X            | X            | X            |
| Json (Default on 5.2.0)        | Json         | 5.2.0    | X            | X            | X            |
| GD                             | Image        | gd       |              |              |              |
| Gettext                        | I18n         | gettext  |              |              |              |
| Imagick                        | Image        | imagick  |              |              |              |
| Mbstring                       | UTF8         | mbstring |              |              |              |

*Decreased
