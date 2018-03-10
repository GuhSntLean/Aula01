<?php

//$dbMysql = new PDO("mysql:host=localhost;dbname=aula03","gs","4linux@");
$db_Postgres = new PDO("pgsql:host=localhost;dbname=aula03","gs","4linux@");

//$dbMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db_Postgres->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

//echo "<pre>";
//var_dump($db_Postgres);

//var_dump($dbMysql);

