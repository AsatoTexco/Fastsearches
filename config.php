<?php


$db_name = 'nome_banco';
$db_host = 'host';
$db_user = 'user_banco';
$port = 'porta';
$db_password = 'senha_do_banco';
$ssl_ca = '<path_to_ca_cert>';

// options para enviar de forma segura 
$options = [
    PDO::MYSQL_ATTR_SSL_CA => $ssl_ca,
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false, 
];
$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host.":".$port,$db_user,$db_password,$options);

$sql = $pdo->query('SELECT * from user');

print_r($sql->fetchAll(PDO::FETCH_ASSOC));



?>