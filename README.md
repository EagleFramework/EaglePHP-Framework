# EaglePHP Framework

EaglePHP is lightweight HMVC PHP Framework.

* \Eagle is as a library module and \Application extends on \Eagle.
* \Eagle doesn’t require \Application, defining constants to bootstrap and any helper functions
* Fast routing engine with Request and Response chain
* Detailed explanations by phpDocumentor 2
* PSR-4 Autoload
* Common functions in Object-Oriented
	* **Cookie:** Cookie functions by static methods
	* **ErrorHandler:** Error, Exception and Shutdown Handler 
	* **File:** File handling with instance of class. ``` new File("filepath");```
	* **GD/Imagick:** Image editor with Adapter Pattern
	* **Json:** Json functions by static methods
	* **Session:** Session function by static methods
	

## Settings

### Namespace/Config/config.php

```PHP
return array(

);
```
### Namespace/Config/routes.php

```PHP
return array(
	"path" => array( // Path of router can include regex and filters
			"target"	=> array("Controller", "Method"),	// Method of Controller
			"name"		=> "Name",							// Name for route (optional)
			"filters"	=> array("filter" => "regex"),		// User defined filters (optional)
			"default"	=> array("param" => value)			// User defined default parameters (optional)
	)
);
```

### Directories

Paths which changeable created dynamically to static by Constant scalar expression.
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

```PHP

```


## Requirements

* PHP 5.6.x *[1]* / 7.0.x / 7.1.x
* **GD** or **Imagick** extension for ImageAdapter
* **Gettext** extension for I18n Class
* **Mbstring** extension for UTF8 Class
* Partially Requirements
	* PHP 7.0.0 for Session::start()'s parameter $options
	* PHP 7.1.0 for Session::create_id() and gc()

*__[1].__ Minimum last two build versions of PHP 5.6*

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
