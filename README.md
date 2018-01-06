# EaglePHP Framework

EaglePHP is lightweight HMVC PHP Framework.

* \Eagle is as a library module and \Application extends on \Eagle.
* \Eagle doesn’t require \Application, defining constants to bootstrap and any helper functions
* Fast routing engine with Request and Response chain
* Detailed explanations with phpDocumentor 2 standards
* PSR-4 Autoload
* Common functions in Object-Oriented
	* **Cookie:** Cookie functions by static methods
	* **ErrorHandler:** Error, Exception and Shutdown Handler
	* **File:** File handling with instance of class. ``` new File("filepath");```
	* **GD/Imagick:** Image editor with Adapter Pattern
	* **Json:** Json functions by static methods
	* **Session:** Session functions by static methods
	* **SessionHandler:** Session handling with instance of class


## Settings

#### Namespace/Config/config.php

```PHP
return array(
	/** General Settings (Optional) */
	"base_url"		=> "http://example.com/", // If null or not defined then auto detect
	"display_errors"	=> true,
	"error_repoting"	=> E_ALL, // Production: E_ALL & ~E_DEPRECATED & ~E_STRICT
	"locale"		=> "en-US",
	"timezone"		=> "UTC",

	/** Database (Required) */
	"Database"	=> array(
		"dns"		=> "mysql:dbname=tablename;host=127.0.0.1;port=3306;charset=utf8",
		"username"	=> "root",
		"password"	=> "",
		"options"	=> array()
	)
);
```
#### Namespace/Config/routes.php

```PHP
return array(
	"path" => array( // Path of router can include regex and filters
		"target"	=> array("Controller", "Method"),	// Method of Controller
		"name"		=> "Name",				// Name for route (optional)
		"filters"	=> array("filter" => "regex"),		// User defined filters (optional)
		"default"	=> array("param" => value)		// User defined default parameters (optional)
	)
);
```

#### Directories

```
public/
└── ...
vendor/	(Not static location)
├── Application/
│   ├── Config/		(Changeable path by Config class)
│   ├── Controller/
│   ├── Locale/		(Changeable path by Controller class)
│   ├── Model/
│   ├── Module/		(Changeable path by Module class)
│   └── View/		(Changeable path by Controller class)
│
└── Eagle/
    └── ... (same as \Application)
```


## Run

#### For index.php file in public folder

```PHP
/** Set namespace to work */
namespace Application;

/** Initialize Eagle */
require __DIR__."/../vendor/Eagle/Eagle.php";
\Eagle\Eagle::init();

/** Load Module and Initialize */
\Eagle\Module::load("Application", __DIR__."/../vendor/Application", true);
Application::init();

/** Force Request */
(coming soon)
```


## Requirements

* PHP 5.6.x *(lastest build)* / 7.0.x / 7.1.x / 7.2.x
* Optional Requirements
	* **GD** or **Imagick** extension for ImageAdapter
	* **Gettext** extension for I18n Class
	* **Mbstring** extension for UTF8 Class

*__Note:__ Be sure about default extensions; Fileinfo, Filter and Json need to be enabled.*
