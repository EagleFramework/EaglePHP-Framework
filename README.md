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
	* **Session:** Session handler with instance of class and get/set by static methods


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

* PHP 5.6.*(lastest build)* / 7.0.x / 7.1.x
* Optional Requirements
	* **GD** or **Imagick** extension for ImageAdapter
	* **Gettext** extension for I18n Class
	* **Mbstring** extension for UTF8 Class

*__Note:__ Be sure about default extensions; Fileinfo, Filter and Json need to be enabled.*
