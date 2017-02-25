# EaglePHP Framework

EaglePHP is lightweight HMVC PHP Framework.

* Supports PHP 7.0+
* \Eagle is common system namespace for applications. Doesn’t call anyting from \Application
* \Application is as a module in vendor folder. \Application is totally override classes in \Eagle
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


## Settings

### Config/config.php

```PHP
return array(


);
```

### Config/routes.php

```PHP
return array(
	"path" => array( // Path of router can include regex and filters
			"target"		=> array("Controller", "Method"),	// Method of Controller
			"name"			=> "Name",							// Name for route (optional)
			"filters"		=> array("filter" => "regex"),		// User defined filters (optional)
			"default"		=> array("param" => value)			// User defined default parameters (optional)
	)
);
```


## Requirements

* Minimum last two build versions of PHP 5.6
* **GD** or **Imagick** extension for ImageAdapter
* **Gettext** extension for I18n Class
* **Mbstring** extension for UTF8 Class
* Partially Requirements
	* PHP 7.0.0 for Session::start()'s parameter $options
	* PHP 7.1.0 for Session::create_id() and gc()

### Requirements Table

| **Property**                   | **Used by**  | **Req.** | **PHP 5.6** | **PHP 7.0** | **PHP 7.1** |
|--------------------------------|--------------|----------|-------------|-------------|-------------|
| Interfaces                     | -            | 5.0.0    | X           | X           | X           |
| Traits                         | -            | 5.4.0    | X           | X           | X           |
| finally keyword                | -            | 5.5.0    | X           | X           | X           |
| yield keyword                  | -            | 5.5.0    | X           | X           | X           |
| Constant scalar expression     | EaglePHP     | 5.6.0    | X           | X           | X           |
|                                |              |          |             |             |             |
| **Function**                   | **Used by**  | **Req.** | **PHP 5.6** | **PHP 7.0** | **PHP 7.1** |
| error_clear_last()             | ErrorHandler | 7.0.0    | X *[1]*     | X           | X           |
| session_abort()                | Session      | 5.6.0    | X           | X           | X           |
| session_reset()                | Session      | 5.6.0    | X           | X           | X           |
| session_start() param $options | Session      | 7.0.0    |             | X           | X           |
| session_create_id()            | Session      | 7.1.0    |             |             | X           |
| session_gc()                   | Session      | 7.1.0    |             |             | X           |

*__[1].__ Decreased to PHP 5.4.0*

*__Note:__ As PHP 5.2.0, Filter and Json extension; as PHP 5.3.0, Fileinfo extension is bundled and compiled into PHP by default.*
