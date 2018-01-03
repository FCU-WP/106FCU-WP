<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname = "localhost";
$database= "b32_21081456_guest";
$username= "root";
$password= "082351279";
mysql_connect($hostname, $username, $password);
mysql_select_db($database);
mysql_query("set names 'utf8'");
?>