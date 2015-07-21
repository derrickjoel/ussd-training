<?php


$hostname = "localhost";
$username = "kplc";//root
$password = "kplc";
$connection =  mysql_connect($hostname, $username, $password) or
					trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db("kplc");

/* print_r(mysql_error());

if(isset($connection)){
echo "we are good";
} */

?>
