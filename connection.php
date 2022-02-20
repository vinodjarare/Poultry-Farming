<?php
global $db;
include_once('core.php');
include_once('mysql.php');

////////// LOCALHOST OR LOCAL SERVER CONNECTION //////////////////////////	



date_default_timezone_set("Asia/kolkata");

////////// ONLINE SERVER CONNECTION //////////////////////////


$db = new ezSQL_mysqli('root', '', 'poultry', 'localhost');
// $select_code = $db->get_var("SELECT * FROM `contactus_tbl`");	
// $db->debug();


// define("document_root", $_SERVER['DOCUMENT_ROOT'] . '/', '');
// define("SITE_ROOT", 'http://localhost/login.php', '');
error_reporting(0);

function prnt($arr)
{
	echo "<PRE>";
	print_r($arr);
	echo "</PRE>";
}
