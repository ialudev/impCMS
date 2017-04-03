<?php

try {
	// ACP ACP ACP ACP ACP ACP
	// ACP ACP ACP ACP ACP ACP
	// ACP ACP ACP ACP ACP ACP
	// Database connection
	// mysql:host= localhost or 127.0.0.1
	// possible that you have to add port=3306; after mysql:host=something;

	$db_host = "localhost";
	$db_name = "database";
	$db_user = "root";
	$db_password = "root";
    
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';', $db_user, $db_password, array(\PDO::MYSQL_ATTR_INIT_COMMAND =>  'SET NAMES utf8') );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {

	// if database connection fail = show error page
    
    include_once("../views/_sqlerror.php");
    die();
}

include("../classes/usage.php");


?>