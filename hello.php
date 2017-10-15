<?php

//include "java.php";
//include "ruby.php";

// spl_autoload_register() loads all the classes from different files in a particular file.

spl_autoload_register(function($class_name){
	include "$class_name".".php";
});

$java = new Java;
$ruby = new Ruby;

?>