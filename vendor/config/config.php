<?php
/** Config */
return array(
	/** General Settings (Optional) */
	"base_url"			=> null, // If null or not defined then auto detect
	"display_errors"	=> true,
	"error_repoting"	=> E_ALL, // Production: E_ALL & ~E_DEPRECATED & ~E_STRICT
	"locale"			=> "en-US",
	"timezone"			=> "UTC",

	/** Database (Required) */
	"Database"	=> array(
		"dns"		=> "mysql:dbname=databasename;host=127.0.0.1;port=3306;charset=utf8",
		"username"	=> "root",
		"password"	=> "",
		"options"	=> array()
	)
);
?>