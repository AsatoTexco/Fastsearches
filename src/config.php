<?php


$db_name = 'pesquisa';
$db_host = 'gateway01.eu-central-1.prod.aws.tidbcloud.com';
$db_user = 'EKd5Yr8hnJ9iKyz.root';
$db_password = 'vNtOyy6KJHNQ0XGu';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host,$db_user,$db_password);


?>