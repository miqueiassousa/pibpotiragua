<?php

$db_name = 'pibpotiragua';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));