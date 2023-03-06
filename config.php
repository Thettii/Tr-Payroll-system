<?php
//username
define('MYSQL_USER','root');
//password
define('MYSQL_PASSWORD','');

define('MYSQL_HOST','localhost');

define('MYSQL_DATABASE','tr_payroll_system');

$pdoOptions = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);

//connection code
$pdo = new PDO(
  'mysql:host=' .MYSQL_HOST.';dbname='.MYSQL_DATABASE,
  MYSQL_USER,MYSQL_PASSWORD,
  $pdoOptions
);


?>