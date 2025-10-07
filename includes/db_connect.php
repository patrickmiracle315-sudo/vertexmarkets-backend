<?php
$cfg = ['host'=>'YOUR_SQL_HOST','dbname'=>'YOUR_DB_NAME','dbuser'=>'YOUR_DB_USER','dbpass'=>'YOUR_DB_PASS'];
try{ $dsn = "mysql:host={$cfg['host']};dbname={$cfg['dbname']};charset=utf8mb4"; $pdo = new PDO($dsn,$cfg['dbuser'],$cfg['dbpass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); } catch(Exception $e){ $pdo=null; error_log($e->getMessage()); }
?>