<?php
/** Routes */
return array(
	"/"			=> array("target" => array("Application\Controller", "index"), "name" => "home"),
	"error"		=> array("target" => array("Application\Controller", "error"), "name" => "error")
);
